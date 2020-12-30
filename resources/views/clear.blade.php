<!DOCTYPE html>
<html>
<head>
    <title>New Creations</title>
    <meta http-equiv=“Expires” content=”-1″>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=5.0"
    />
    
</head>
<script type="text/javascript">
    window.onload = function () {
        window.localStorage.clear();
        window.caches.keys().then(function (cacheNames) {
          cacheNames.forEach(function (cacheName) {
            window.caches
              .open(cacheName)
              .then(function (cache) {
                return cache.keys();
              })
              .then(function (requests) {
                requests.forEach(function (request) {
                  console.log(cacheName);
                  return caches.delete(cacheName);
                });
              });
          });
        });
    };
</script>

<body>

<h1>Yes. Cleared New Creations cache and local storage </h1>

</body>
</html>
