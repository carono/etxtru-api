<?php


namespace carono\etxtru;


use function GuzzleHttp\Psr7\build_query;

class Client extends ClientAbstract
{
    public $apiKey;
    public $url = 'www.etxt.ru/api/json';
    public $method = 'POST';
    public $type = self::TYPE_MULTIPART;
    public $output_type = self::TYPE_JSON;

    protected function sign($method)
    {
        $baseParamsArr = [
            'token' => $this->apiKey,
            'method' => $method
        ];
        ksort($baseParamsArr);
        $params = '';
        foreach ($baseParamsArr as $key => $val) {
            $params .= ($key . '=' . $val);
        }
        return md5($params . md5($this->password . 'api-pass'));
    }

    /**
     * @param $urlRequest
     * @param array $data
     * @param string $responseClass
     * @return mixed
     */
    public function getContent($urlRequest, $data = [], $responseClass = Response::class)
    {
        try {
            $method = $urlRequest;
            $sign = $this->sign($method);
            $urlRequest = '?' . build_query(['token' => $this->apiKey, 'method' => $method, 'sign' => $sign]);
            $content = parent::getContent($urlRequest, $data);
            return self::stdClassToResponse($content, $responseClass);
        } catch (\Exception $e) {
			if ($this->request){
                $this->request->getBody()->rewind();
			}
            $response = new Response();
            $response->success = false;
            $response->error = $this->request ? $this->request->getBody()->getContents() : $e->getMessage();
            return $response;
        }
    }

    /**
     * @param $stdClass
     * @param $responseClass
     * @return ResponseAbstract
     */
    protected static function stdClassToResponse($stdClass, $responseClass)
    {
        /**
         * @var ResponseAbstract $response
         */
        $response = new $responseClass();
        foreach ($stdClass as $key => $value) {
            if (is_array($value) && method_exists($response, 'getResponseClass') && ($class = $response->getResponseClass($key))) {
                foreach ($value as $item) {
                    $response->{$key}[] = self::stdClassToResponse($item, $class);
                }
            } else {
                $response->$key = $value;
            }
        }
        $response->success = !(bool)$response->error;
        return $response;
    }
}