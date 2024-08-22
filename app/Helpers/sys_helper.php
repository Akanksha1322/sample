<?php 

    function __add__session($key, $value){
      $session = session();
      $session->set($key, $value);
    } 
    
    function __get__session($key){
      $session = session();
      return $session->get($key);
    }
    
    function __destroy__session(){
      $session = session();
      $session->destroy();

    //   $sdestroyId = $session->get('id');
    //   return $sdestroyId;
    }
    
    function __randomString($pType = 'ALPHANUM', $pLength = 8)
    {
        switch ($pType) {
            case 'BASIC':
                return mt_rand();
                break;
            case 'ALPHA':
            case 'ALPHANUM':
            case 'NUM':
            case 'NOZERO':
                $seedings = array();
                $seedings['ALPHA'] = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $seedings['ALPHANUM'] = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $seedings['NUM'] = '0123456789';
                $seedings['NOZERO']   = '123456789';
    
                $pool = $seedings[$pType];
    
                $str = '';
                for ($i = 0; $i < $pLength; $i++) {
                    $str .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
                }
    
                return $str;
                break;
    
            case 'UNIQUE':
            case 'MD5':
                return md5(uniqid(mt_rand()));
                break;
        }
    }

    function __encryptPassword($pPassword, $pSecurityString)
    {
      $options = [
        'cost' => 12
      ];
      return password_hash($pPassword . $pSecurityString, PASSWORD_BCRYPT, $options);
    }
    
    function __verifyPassword($pPassword, $pHash)
    {
      if (password_verify($pPassword, $pHash)) {
        return true;
      }
      return false;
    }

    function __getIPAddress()
    {
      //whether ip is from the share internet 
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      }
      //whether ip is from the proxy 
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      //whether ip is from the remote address 
      else {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
    }
    
    function getCategoryName($category_id)
    {
        $db = \Config\Database::connect(); 
        $query = $db->query("SELECT category_name FROM product_category WHERE id = ?", [$category_id]);
        $result = $query->getRow();
        if ($result) {
            return $result->category_name;
        }
        return 'Category Not Found'; 

    }
    
    function process_product($productId)
    {
        $db = \Config\Database::connect(); 
        $query = $db->query("SELECT id FROM product WHERE id = ?", [$productId]);
        $result = $query->getRow();
        if ($result) {
            return $result->id;
        }
        
    }
    
   function find_rating($product_id, $user_id) {
    $db = \Config\Database::connect(); 
    $sql = "SELECT * FROM rating WHERE user_id = ? AND product_id = ? ORDER BY id DESC";
    $query = $db->query($sql, [$user_id, $product_id]);
    $result = $query->getRow();
    if (!empty($result->rating)){
        $rating = $result->rating;
    }else{
        $rating = "0";
    }
    return $rating;
}


    

