# FingerPrint-class

My FingerPrint class simply generates a hash and thus a fingerprint in order to better target your users and be able to detect any trace of vpn

Usage:

```php

  <?php

    require_once 'fingerprint.php'; //load class file
    
    $fingerprint = new FingerPrint(); // instance object FingerPrint
    
    echo ($fingerprint->generate_finger_print()."\n"); print fingerprint hash of my browser
    
?>

```
