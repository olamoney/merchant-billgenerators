# Server side code for merchant bill generator


- Summary
A bill consists of these fields:


`{
"command":"debit",
"accessToken":"ola_access_token",
"uniqueId":"TXN1232434343555523",
"comments":"optional",
"udf":"optional",
"hash":"3ce32cf5dd8ad19909fa944dbb67e82260db059590546fad676ba859654477447080ef7a6262b91be36ce5e3260d525d977da632957b9822499134dd96a076c1",
"returnUrl":"http://myweb.com/myreturn_url.php",
"notificationUrl":"http://myweb.com/mynotify_url.php",
"amount":"100.00",
"currency":"INR"
}`

The value of the `hash` key is generated based on the other keys. It is a SHA512 of the hash string, where hash string is as follows:

`HashString := 'access_token|uniqueId|comments|udf|returnUrl|notifyUrl|currency|amount|salt'`

`Hash := SHA512(HashString)`

This Repo will contains the above sudo code implementation in different languages as a base to be used.

- Php - https://github.com/olamoney/merchant-billgenerators/tree/master/php