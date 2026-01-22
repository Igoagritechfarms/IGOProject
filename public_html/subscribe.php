<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Subscribe Popup</title>
  <style>
    #subscribePopup {
      display: none;
      position: fixed;
      top: 25%;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      z-index: 9999;
      box-shadow: 0 0 10px #000;
    }

    .close-btn {
      float: right;
      font-size: 18px;
      cursor: pointer;
      color: red;
    }

    .btn {
      color: white;
      background: green;
      margin-left: 55px;

    }

    .btn:hover {
      background-color: #73b21A;
    }

    #subscribePopup:input {
      width: 100px;
      height: 12px;
    }

    #imagePopup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      padding: 0;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      z-index: 1000;
      width: 90%;
      max-width: 450px;
      /* perfect for laptop */
    }

    #imagePopup img {
      width: 100%;
      height: auto;
      /* image will resize perfectly */
      border-radius: 10px;
    }

    .close-img-popup {
      position: absolute;
      top: -15px;
      right: -15px;
      background: red;
      color: white;
      font-size: 24px;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>

  <!-- Image Popup -->
  <div id="imagePopup">
    <span class="close-img-popup">&times;</span>
    <img src="images/popup.jpeg" alt="Popup Image">
  </div>


  <!-- Subscribe Form -->
  <div id="subscribePopup" style="display:none; position:fixed; top:25%; left:50%; transform:translateX(-50%);
     background:#fff; padding:20px; border-radius:8px; box-shadow:0 0 20px #000; z-index:999;">
    <span class="close-btn" onclick="document.getElementById('subscribePopup').style.display='none'" style="float:right; font-size:22px; cursor:pointer;">X</span>
    <form id="subscribeForm">
      <input type="text" name="username" placeholder="Your Name*" required><br><br>
      <input type="email" name="email" placeholder="Your Email*" required><br><br>
      <button type="submit" class="btn">Subscribe</button>
    </form>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- EmailJS -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // ✅ Init EmailJS
      emailjs.init({
        publicKey: "kbfLtPSYKGcZcaBn3" // replace with your public key
      });

      // ✅ 1. Show image popup first
      $("#imagePopup").fadeIn();

      // ✅ 2. On close image, show form
      $(".close-img-popup").click(function() {
        $("#imagePopup").fadeOut(function() {
          $("#subscribePopup").fadeIn();
        });
      });

      // ✅ 3. Submit the form
      $("#subscribeForm").on("submit", function(e) {
        e.preventDefault();

        const formData = {
          username: $("input[name='username']").val(),
          email: $("input[name='email']").val()
        };

        const serviceID = "service_h8hdd0n";
        const adminTemplateID = "template_hc2lw8w"; // to send to you

        // ✅ Send to Admin
        emailjs.send(serviceID, adminTemplateID, formData)
          .then(() => {
            // ✅ Auto-reply to subscriber
            return emailjs.send(serviceID, userTemplateID, formData);
          })
        emailjs.send("service_h8hdd0n", "template_hc2lw8w", formData)
          .then(() => {
            Swal.fire({
              icon: 'success',
              title: 'Thank you!',
              text: 'Thank you for subscribing.',
              confirmButtonColor: '#3085d6'
            });
            $("#subscribePopup").fadeOut();
          })
          .catch(error => {
            Swal.fire({
              icon: 'error',
              title: 'Oops!',
              text: 'Something went wrong.',
              confirmButtonColor: '#d33'
            });
            console.error("Email send failed:", error);
          });
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>