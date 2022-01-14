<!-- the form to upload an image -->
<form class="form-control" action="../api/upload.php" method="post" enctype="multipart/form-data">
     <div class="mb-3">
        <label class="form-label">Title</label> <br>
        <input class="form-control" type="text" name="title" required/>
    </div> 
    <div class="mb-3">
        <label>File Upload</label>
        <input class="form-control" type="File" name="file" id="formFile" required>
    </div>
    <div class="mb-3">
        <input type="checkbox" checked id="checkbox"/> Would you like to add a description? <br><br>
        <textarea id="checkdes" class="form-control" name="description" rows="3" placeholder="Enter your description here"></textarea>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">
        <i class="fa fa-upload"></i> 
            Upload
    </button>
</form>