<h1>Facebook Pixel Conversion API Library</h1>
<h1>EN</H1>
<p>This PHP code allows you to send events to the Facebook Pixel. For example, you can track a registration event by sending an event of the "CompleteRegistration" event type or track a purchase event by sending an event of the "Purchase" event type.</p>
<h2>Usage</h2>
<ol>
  <li>First, include the <code>sendFacebookPixelEvent</code> function in your project to use it.</li>
  <li>Then, you can call the function using the following parameters:
    <ul>
      <li><code>$pixelID</code> (string): The ID of your Facebook Pixel.</li>
      <li><code>$apiVersion</code> (string): The version of the Facebook Graph API. You can use "v15.0" for example.</li>
      <li><code>$accessToken</code> (string): The access token required to use your Facebook Pixel.</li>
      <li><code>$eventType</code> (string): The type of event to be sent. Valid event types are: "PageView", "ViewContent", "AddToCart", "InitiateCheckout", "Purchase", "Lead", "CompleteRegistration", "AddPaymentInfo", "Search", "AddToWishlist", and "Contact".</li>
      <li><code>$eventData</code> (array, optional): Event data. An example array: <code>array("product_name" => "Product Name", "product_id" => "1337", "product_category" => "Towels", "currency" => "EUR","value" => 176.00);</code></li>
<li><code>$userData</code> (array, optional): User data. An example array: <code>array("fn" => hash("sha256","Name"), "ln" => hash("sha256","Surname"), "ph" => hash("sha256","Phone Number"), "ge" => hash("sha256","Male"), "db" => hash("sha256","Birth MM/DD/YYYY"), "ct" => hash("sha256","New Jersey"), "st" => hash("sha256","NJ"), "zp" => hash("sha256","16000"), "country" => hash("sha256","US"), "em" => hash("sha256","info@example.com")</code></li>
<li><code>$testCode</code> (string, optional): If given, the event will be marked as "test_event_code".</li>
</ul>
  </li>
</ol>
<h2>An example usage</h2>
<pre>
$response = sendFacebookPixelEvent(
  "YOUR_PIXEL_ID", // Facebook Pixel ID
  "YOUR_API_VERSION", // Facebook Pixel API version
  "YOUR_ACCESS_TOKEN", // Facebook Pixel access token
  "CompleteRegistration", // Event type
  array(
    "product_name" => "Towels",
    "product_id" => "1337",
    "product_category" => "Set of 2",
    "currency" => "EUR",
    "value" => 176.00
  ),
  array(
    "fn" => hash("sha256","Name"),
    "ln" => hash("sha256","Surname"),
    "ph" => hash("sha256","Phone Number"),
    "ge" => hash("sha256","Male"),
    "db" => hash("sha256","Birth MM/DD/YYYY"),
    "ct" => hash("sha256","New Jersey"),
    "st" => hash("sha256","NJ"),
    "zp" => hash("sha256","16000"),
    "country" => hash("sha256","US"),
    "em" => hash("sha256","info@example.com")
  ),
  "TEST1337" // Test event code
);

echo $response;
</pre>

<h2>Notes</h2>
<ul>
  <li>The <code>sendFacebookPixelEvent</code> function returns a response object containing the result of the event send request. You can use this object to check the status of the request and handle any errors that may have occurred.</li>
  <li>The <code>$eventData</code> and <code>$userData</code> arrays are optional and can be left out if not needed for the specific event type being sent.</li>
  <li>The <code>$testCode</code> parameter is also optional and is used for testing purposes only. It should not be used in production environments.</li>
</ul>

<p>Before using this code, replace the <code>YOUR_PIXEL_ID</code>, <code>YOUR_API_VERSION</code>, and <code>YOUR_ACCESS_TOKEN</code> variables with your own Facebook Pixel information </p>


<h1> TR </H1>
<p>Bu PHP kodu, Facebook Pixel'e olay göndermenizi sağlar. Örneğin, "CompleteRegistration" olay türünde bir olay göndererek bir kaydolma olayını izleyebilir veya "Purchase" olay türünde bir olay göndererek bir satın alma olayını izleyebilirsiniz.</p>
<h2>Kullanım</h2>
<ol>
  <li>Öncelikle, <code>sendFacebookPixelEvent</code> fonksiyonunu kullanmak için projenize dahil etmelisiniz.</li>
  <li>Daha sonra, aşağıdaki parametreleri kullanarak fonksiyonu çağırabilirsiniz:
    <ul>
      <li><code>$pixelID</code> (string): Facebook Pixel'inizin ID'si.</li>
      <li><code>$apiVersion</code> (string): Facebook Graph API sürümü. Örneğin, "v15.0" kullanabilirsiniz.</li>
      <li><code>$accessToken</code> (string): Facebook Pixel'inizi kullanmak için gereken erişim token'ı.</li>
      <li><code>$eventType</code> (string): Gönderilecek olay türü. Geçerli olay türleri: "PageView", "ViewContent", "AddToCart", "InitiateCheckout", "Purchase", "Lead", "CompleteRegistration", "AddPaymentInfo", "Search", "AddToWishlist" ve "Contact".</li>
      <li><code>$eventData</code> (array, opsiyonel): Olay verileri. Örnek bir dizi: <code>array("product_name" => "Product Name", "product_id" => "1337", "product_category" => "Towels", "currency" => "EUR","value" => 176.00);</code></li>
<li><code>$userData</code> (array, opsiyonel): Kullanıcı verileri. Örnek bir dizi: <code>array("fn" => hash("sha256","Name"), "ln" => hash("sha256","Surname"), "ph" => hash("sha256","Phone Number"), "ge" => hash("sha256","Male"), "db" => hash("sha256","Birth MM/DD/YYYY"), "ct" => hash("sha256","New Jersey"), "st" => hash("sha256","NJ"), "zp" => hash("sha256","16000"), "country" => hash("sha256","US"), "em" => hash("sha256","info@example.com")</code></li>
<li><code>$testCode</code> (string, opsiyonel): Eğer verilmişse, olay "test_event_code" olarak işaretlenir.</li>
</ul>

  </li>
</ol>

<h2>Örnek bir kullanım</h2>
<pre>
$response = sendFacebookPixelEvent(
  "YOUR_PIXEL_ID", // Facebook Pixel ID
  "YOUR_API_VERSION", // Facebook Pixel API version
  "YOUR_ACCESS_TOKEN", // Facebook Pixel access token
  "CompleteRegistration", // Event type
  array(
    "product_name" => "Ürün Adı",
    "product_id" => "1337",
    "product_category" => "İkili Set",
    "currency" => "EUR",
    "value" => 176.00
  ),
  array(
    "fn" => hash("sha256","Name"),
    "ln" => hash("sha256","Surname"),
    "ph" => hash("sha256","Phone Number"),
    "ge" => hash("sha256","Male"),
    "db" => hash("sha256","Birth MM/DD/YYYY"),
    "ct" => hash("sha256","New Jersey"),
    "st" => hash("sha256","NJ"),
    "zp" => hash("sha256","16000"),
    "country" => hash("sha256","US"),
    "em" => hash("sha256","info@example.com")
  ),
  "TEST1337" // Test event code
);

echo $response;
</pre>

<h2>Notlar</h2>
<ul>
  <li><code>sendFacebookPixelEvent</code> fonksiyonu, olay gönderme isteğinin sonucunu içeren bir yanıt nesnesi döndürür. Bu nesneyi kullanarak isteğin durumunu kontrol edebilir ve oluşabilecek hataları yönetebilirsiniz.</li>
  <li><code>$eventData</code> ve <code>$userData</code> dizileri opsiyonel ve gönderilen özel olay türü için gerekli değilse atlanabilir.</li>
  <li><code>$testCode</code> parametresi de opsiyonel ve sadece test amaçlı kullanılır. Üretim ortamlarında kullanılmamalıdır.</li>
</ul>

<p>Bu kodu kullanmadan önce, <code>YOUR_PIXEL_ID</code>, <code>YOUR_API_VERSION</code> ve <code>YOUR_ACCESS_TOKEN</code> değişkenlerini kendi Facebook Pixel bilgileriniz ile değiştirin.</p>

<h2>Contact</h2>
mail@huseyintintas.com<br>
https://twitter.com/1337stif
