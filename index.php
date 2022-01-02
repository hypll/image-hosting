<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- HypeStyle CSS -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/hypestyle@0.1.5/dist/css/hypestyle.min.css"
        />

        <title>Img Host</title>
    </head>
    <body>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
          <input type="file" name="file" required/>
          <button class="btn bs-sm" type="submit" name="submit">Upload</button>
        </form>
    </body>
</html>
