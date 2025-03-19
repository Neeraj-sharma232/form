<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form action="" method=" POST">
    <label>Name <span class="text-danger">*</span></label><br>
    <input type="text" name="name" placeholder="Enter Your Name Here" class="w-full border rounded-lg p-2 mb-4" required>
    <label>Email <span class="text-danger">*</span></label><br>
    <input type="email" name="email" placeholder="Enter Your Email Here" class="w-full border rounded-lg p-2 mb-4" required>
    <label>Phone Number <span class="text-danger">*</span></label><br>
    <input type="tel" name="phone" placeholder="Enter Your Phone Number Here" class="w-full border rounded-lg p-2 mb-4" required>
    <label>Subject <span class="text-danger">*</span></label><br>
    <input type="text" name="subject" placeholder="Subject" class="w-full border rounded-lg p-2 mb-4" required>
    <button type="submit" name="sub" class="py-2 px-7 bg-[#063232] text-white rounded-lg hover:text-[#0c6e6d]-800">Call Me Back</button>
    </form>

    <?php
    if (isset($_POST["sub"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];

        $to = $email;
        $txt = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone;
        $headers = "From: nihalsharma98765@gmail.com";

        mail($to, $subject, $txt, $headers);
    }


    ?>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>