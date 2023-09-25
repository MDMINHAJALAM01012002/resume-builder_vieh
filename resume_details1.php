<div class="container">
<form method="post" action="<?=$action->helper->url('action/createresume')?>" class="border border-2 rounded-2 p-2 my-3">
    <div class="row justify-content-between">
    <p class="fs-4">Personal Details</p>
  <div class=" col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Enter your name" name="name" id="inputEmail3">
    </div>
  </div>
  
  <div class=" col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Headline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="headline" placeholder="Enter Headline" id="inputEmail3">
    </div>
  </div>
</div>
  <div class=" mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Objective</label>
    <div class="col-sm-10">
      <textarea class="w-100" name="objective"></textarea>
    </div>
  </div>
  <hr>

  <div class="row justify-content-between">
    <p class="fs-4">Contact Details</p>
  <div class=" col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Enter your name" name="email" id="inputEmail3">
    </div>
  </div>
  
  <div class=" col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile" placeholder="Enter Headline" id="inputEmail3">
    </div>
  </div>
</div>
  <div class=" mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" name="address" placeholder="Enter address" class="form-control" id="inputEmail3">
</div>
  </div>
<hr>
<div class=" col-6 mb-3 fs-4">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Skills</label>
    <div class="col-sm-10"> 
    <div class="input-group mb-3">
    <input type="text"  class="form-control" id="userskill" placeholder="skills" name="skill" aria-label="Example text with button addon" aria-describedby="button-addon1">
  <button class="btn btn-primary" type="button" id="addskill">Add Skill</button>
</div>
</div>
</div>
<hr>
<div class=" mb-3 fs-4">
    <label for="inputEmail3" name="education" class="col-sm-2 col-form-label">Education</label>
    <div class="col-sm-10">
<div class="d-flex gap-2">
    <input type="text" name="collage" class="form-control" id="collage" placeholder="Insititute Name"/>
      <input type="text" name="course" class="form-control" id="course" placeholder="Course Name" />
      <input type="text" name="duration" class="form-control" id="duration" placeholder="Time Duration"/>
   <button type="button" class="btn btn-primary" id="addeducation">Add</button>
</div>
    </div>
</div>
<hr>
<div class=" mb-3 fs-4">
    <label for="inputEmail3" name="work" class="col-sm-2 col-form-label">Experience</label>
    <div class="col-sm-10">
    <div class="d-flex gap-2">
      <input type="text" name="company" class="form-control" id="company" placeholder="Company Name">
      <input type="text" name="jobrole" class="form-control" id="jobrole" placeholder="Role" >
      <input type="text" name="w_duration" class="form-control" id="w_duration" placeholder="Time Duration">
   <button type="button" class="btn btn-primary" id="addexp">Add</button>
</div>
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Create Resume</button>
</form>

</div>