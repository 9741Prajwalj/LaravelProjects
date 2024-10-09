
<!-- php validation in PHP -->

<div>
    <h1>Wellcome to new era</h1>


<!-- @if($errors->any())
@foreach($errors->all() as $error)
<div style="color:red">
    {{$error}}
</div>
@endforeach
@endif -->


    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div><br>
        <div class="input-wrapper">
            <input type="email" placeholder="Enter user email" name="email" value="{{old('email')}}"
            class="{{$errors->first('email')?'input-error':''}}">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div><br>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city" value="{{old('city')}}"
            class="{{$errors->first('city')?'input-error':''}}">
            <span style="color:red">@error('city'){{$message}}@enderror</span>
        </div>
        <br>
        <!-- <div class="none">
        <h5>User skill</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="Node" id="node">
        <label for="node">Node</label>
        <input type="checkbox" name="skill[]" value="Java" id="java">
        <label for="java">Java</label>
        <input type="checkbox" name="skill[]" value="Python" id="python">
        <label for="python">Python</label>
    </div>
    <span style="color:red">@error('skill'){{$message}}@enderror</span> -->
    <div class="input-wrapper">
            <button>Add new User</button>
    </div>
    </form>
    
</div>
<style>
    
input{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
}
.input-wrapper{
    margin:2px
}
button{
    padding: 10px;
}
.input-error{
    border:1px solid red;
}
</style>








<div>

<!-- 
  <form action="adduser" method="post">
    @csrf
    <div>
        <h5>User skill</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="Node" id="node">
        <label for="node">Node</label>
        <input type="checkbox" name="skill[]" value="Java" id="java">
        <label for="java">Java</label>
        <input type="checkbox" name="skill[]" value="Python" id="python">
        <label for="python">Python</label>
    </div>
    <div>
        <h5>Gender</h5>
        <input type="radio" name="gender" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female">
        <label for="female">Female</label>
    </div>
    <div>
        <h5>City</h5>
        <select name="city" id="">
            <option value="Delhi">Delhi</option>
            <option value="Mysore">Mysore</option>
            <option value="Banglore">Banglore</option>
            <option value="Manglore">Manglore</option>
        </select>
    </div>
    <div>
        <h5>Age Range</h5>
        <input type="range" name="age" min="18" max="100">
    </div>
    <button>Add New User</button>
  </form> -->
</div>



