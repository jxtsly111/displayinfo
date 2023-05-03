<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="card">
	<img src="./images/sitelogo2.png" alt="">
    <h2>AfrEA VOPE REGISTRATION FORMS</h2>

    <form method="post" action="{{ route('submit-form') }}"> @csrf
    <div class="form" >
        <!-- this is where the african region dropdown comes -->
    <hr>
    <label for="dropdown">SELECT AFRICAN REGION:</label>
    <select id="dropdown" name="dropdown">
      <option value="">Select an african region</option>
      <option value="WESTERN AFRICA">WESTERN AFRICA</option>
      <option value="CENTRAL AFRICA">CENTRAL AFRICA</option>
      <option value="NOTHERN AFRICA">NOTHERN AFRICA</option>
      <option value="SOUTHERN AFRICA">SOUTHERN AFRICA</option>
      <option value="EASTERN AFRICA">EASTERN AFRICA</option>
    </select>
    
    <div id="selected-option-fields" style="display: none; margin-top: 20px;">
      <label for="selected-option-field">SELECT AFRICAN COUNTRY:</label>
      <select id="selected-option-field" name="country">
        <option value="">Select an option</option>
      </select>
    </div>
    <!-- this is where the african region dropdown ends -->
    <!-- this is where the text area start -->
    <hr>
    <div class="text-area">
        <div class="text-label">
            <label for="textarea">A BRIEF HISTORY:</label>
        </div>
        <div class="form-group">
          <textarea rows="5" cols="70" placeholder="Enter a brief history here:" name="brief_history"></textarea>
        </div>
    </div> 

    <hr>
    <div class="text-area">
        <div class="text-label">
            <label for="textarea">VOPE PROFILE:</label>
        </div>
        <div class="form-group">
          <textarea rows="5" cols="70" placeholder="Enter VOPE Profile:"name="vope_profile"></textarea>
        </div>
    </div> 

    <hr>
  <div class="form-group">
    <label for="inputName">Partners:</label>
    <input type="text" id="inputName" name="partners">
  </div>
  <hr>

  <h2>NAMES & POSITIONS OF EXECUTIVES</h2>

  <hr>
  <div class="form-group">
    <label for="inputName">Name:</label>
    <input type="text" id="inputName" name="name">
  </div>
  <hr>
  <div class="form-group">
    <label for="inputName">Position:</label>
    <input type="text" id="inputName" name="position">
  </div>
  <hr>
  <div class="form-group">
    <label for="inputName">Email:</label>
    <input type="email" id="inputName" name="email">
  </div>
  <hr>
  <div class="form-group">
    <label for="inputName">Telephone:</label>
    <input type="number" id="inputName" name="telephone">
  </div>
  <hr>

  <h2>SOCIAL MEDIA LINKS</h2>
  <hr>
  <div class="form-group">
    <label for="inputName">LinkedIn Profile:</label>
    <input type="link" id="inputName" name="linkedin_profile">
  </div>

  <hr>
  <div class="form-group">
    <label for="inputName">Twitter/Blog/Portfolio:</label>
    <input type="link" id="inputName" name="twitter">
  </div>
  
  <hr>
  <div class="form-group">
    <label for="inputName">Facebook:</label>
    <input type="link" id="inputName" name="facebook">
  </div>

  <hr>
  <div class="form-group">
    <label for="inputName">Address:</label>
    <input type="text" id="inputName" name="address">
  </div>
  <button type="submit" name="submit">Submit</button> 

  </div>
  </form>
  </div>
    
</body>
<script src="{{asset('assets/script.js')}}"></script>
</html>