# DIFFERENCE B/W SESSION AND COOKIE

## SESSION
  ```
   Session data store on the server
   will not set expression
  ```

## COOKIE
    ```
    COOKIE data store on the browser
    with COOKIE you can set expression
    ```

## Function
  ```
  ~ To set cookie the required parameters
  setcookie('cookie name', value, expression);

  ~ To unset cookie
  setcookie('cookie name', value, time() - 3600)

  ~ To check if the cookie is set or not
  if(count[$_COOKIE]>0){
    echo 'cookie is set';
  } else {
    echo 'cookie is not set';
  }
  ```
