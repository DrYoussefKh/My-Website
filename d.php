<?php
// معالجة طلب التسجيل
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // استقبال البيانات من النموذج
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // يمكنك هنا إجراء التحقق من البيانات وتنظيفها قبل إدخالها إلى قاعدة البيانات

    // إجراء الإضافة إلى قاعدة البيانات
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "تم تسجيل الحساب بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

// معالجة طلب تسجيل الدخول
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // استقبال البيانات من النموذج
    $username = $_POST['username'];
    $password = $_POST['password'];

    // يمكنك هنا إجراء التحقق من اعتمادات الدخول في قاعدة البيانات

    // إذا كانت الاعتمادات صحيحة، يمكنك تحويل المستخدم إلى صفحة دخول أو أي صفحة أخرى
    // إذا كانت الاعتمادات غير صحيحة، يمكنك عرض رسالة خطأ
}
?>
