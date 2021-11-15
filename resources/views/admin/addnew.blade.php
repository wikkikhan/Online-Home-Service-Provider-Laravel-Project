 @include('admin/header')
          
      <!-- ******************************************************************* -->
      <div class="container pt-5 mt-5">
        
      </div>
      <div class="container rounded mt-5 p-5 bg-light" style="border: 1px solid rgb(211, 210, 210);height: 460px;">
        <div class="row pb-3">
          <h1 style="font-weight: 500;">Add New Service Category:</h1>
        </div>
        
        <form  action="/admin/addservice" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="fortitle" style="font-weight: 600;">Title:</label>
            <input type="text" class="form-control" id="fortitle" aria-describedby="emailHelp"name="title" required>
          </div>
          <div class="form-group">
            <label for="forimage" style="font-weight: 600;">Image:</label>
            <input type="file" class="form-control" id="forimage" accept="image/"name="image" required>
          </div>
          <div class="form-group">
            <label for="fordes" style="font-weight: 600;">Description:</label>
            <input type="text" class="form-control" id="fordes" name="description" required>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
   
     

</body>
</html>