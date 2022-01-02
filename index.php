<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Free, Clean and Secure image hosting for your images.">
        <meta name="theme-color" content="#b81414">
         <meta property="og:type" content="website" />
        <meta property="og:title" content="Free Image Hosting" />
        <meta property="og:url" content="https://imghost.hypll.org" />
        <meta property="og:site_name" content="Hyll.org" />
        <!-- <meta property="og:image" content="/src/assets/logo.png" /> -->
        <!-- <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" /> -->
        <meta property="og:locale" content="en" />
        <meta
            name="twitter:text:title"
            content="Free Image Hosting"
        />
        <meta name="twitter:image" content="/src/assets/logo.png" />
        <meta name="twitter:card" content="summary_large_image" />
        <link rel="canonical" href="https://imghost.hypll.org" />
        <!-- stylesheets -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/hypestyle@0.1.5/dist/css/hypestyle.min.css"
        />
        <!-- fontawesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css">
        <title>Image Hosting</title>
    </head>
    <body>
        <h1
            style="font-family: Open Sans; font-weight: bold !important"
            class="text-center mt-3 text-white"
        >
            Image Hosting
        </h1>
        <p style="color: #d25151" class="text-center mt-1">
            To host an image you can upload it below!
        </p>
        <br />
         <div class="w-full text-center">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
          <input class="file-input br-sm" type="file" name="file" required />
            <br><br>
          <button class="btn btn-primary text-white tr-sm bs-sm bs-hover-none pr-3 pl-3" type="submit" name="submit"><i class="fa fa-upload"></i> Upload</button>
        </form>
      </div>
    </body>
</html>
