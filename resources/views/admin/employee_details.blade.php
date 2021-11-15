@include('admin/header')
      <!-- ******************************************************************* -->
      <div class="container pt-5 mt-5">
        
      </div>
      <div class="container rounded mt-5 p-5 mb-5 bg-light" style="border: 1px solid rgb(211, 210, 210);">
        <div class="row pb-3">
          <h1 style="font-weight: 500;">Details:</h1>
        </div>
        <div class="row">
          
        </div>
        <form>
          <div class="form-group">
            <label for="forname" style="font-weight: 600;">Name:</label>
            <input type="text" class="form-control disabled" id="forname" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="fname" style="font-weight: 600;">Fathe Name:</label>
            <input type="text" class="form-control disabled" id="fname">
          </div>
          <div class="form-group">
            <label for="forcnic" style="font-weight: 600;">CNIC:</label>
            <input type="text" class="form-control disabled" id="forcnic">
          </div>
          <div class="form-group">
            <label for="foremail" style="font-weight: 600;">Email:</label>
            <input type="email" class="form-control disabled" id="foremail">
          </div>
          <div class="form-group">
            <label for="forcity" style="font-weight: 600;">City:</label>
            <input type="text" class="form-control disabled" id="forcity">
          </div>
          <div class="form-group">
            <label for="forphone" style="font-weight: 600;">Phone NO:</label>
            <input type="text" class="form-control" id="forphone">
          </div>
          <button type="submit" class="btn btn-primary">Back</button>
          <button type="submit" class="btn btn-primary">Remove</button>
        </form>
      </div>
   
     

</body>
</html>