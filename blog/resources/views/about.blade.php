<div>

<!-- @include('common.inner') -->
<x-message-banner msg="about user Message"/>
    <!-- An unexamined life is not worth living. - Socrates -->
    <h1>About View</h1> 
    <h1>Hello View Page......</h1>
     <h1>How are you.....</h1>
     <h2>let Update you again.....</h2>

<!-- @includeIf('common.header',['page'=>"this is the About Page.."]) -->
<!-- @include('common.header',['page'=>"this is the About Page.."]) -->
</div>
<style>
  .success{
    background:lightgreen;
    color: green;
    padding: 3px 5px;
    border-radius: 2px;
    display: inline-block;
    margin-top: 10px;
  }
</style>