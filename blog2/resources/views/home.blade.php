<!-- URL Generat -->

<div>
   <h1>Home Page</h1>
   {{URL::current()}}

<a href="/about">About page</a>
         
   <h3>
    <!-- {{URL::current()}} -->
     {{url()->current()}}
   </h3>

   <h3>
    <!-- {{URL::full()}} -->
     {{url()->full()}}
   </h3>

   <h3>Last URL: {{URL::previous()}}</h3>
</div>
