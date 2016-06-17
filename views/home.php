 <div class="col s12 head z-depth-4">
     <div class="container">
    <div class="row" style="padding-top: 22%;">
        <h1>Blurp</h1>
        <p class="headerp">An advanched model php framework which fits right in a MVC Framework,<br> Developed by Mediacollege Students</p>
        <br>
        <a class="waves-effect waves-light btn download">Download Blurp</a><a href="#gettingstarted" class="waves-effect waves-light btn documentation">Blurps Documentation</a>
    </div>
     </div>
 </div>

 <div id="gettingstarted" class="col s12">
     <h1 class="gs"> Getting Started</h1>
<div class="container">
     <p class="gstext">A Framework for any device, medium, and accessibility.
         Foundation is a family of responsive front-end frameworks that make it easy to design beautiful responsive websites, apps and emails that look amazing on any device.
         Foundation is semantic, readable, flexible, and completely customizable.
         We’re constantly adding new resources and code snippets, including these handy HTML templates to help get you started!</p>
 </div>
 </div>
 <div class="container">
 <div  style="margin-top: 90px;" class="row">


     <!--         Card 1-->
 <div class="col s12 m4">
         <div class="card">
             <div class="card-image">
                 <span class="card-title black-text">Chose between Mongo or SQL</span>
             </div>


             <div class="card-content">
                 <p style="padding: 20px;">SQL</p>
                 <pre class="code"><i>//Create new MySQLManager</i>
<i class="var">$sql</i> = new <i class="function">MySQLManager();</i>

<i>//Connects you to the selected database</i>
<i class ="var">$sql</i>-><i class="function">connectDatabase(<i class="string">"DatabaseName"</i>)</i>;</pre>
                 <p style="padding: 20px;">Mongo</p>
                 <pre class="code">
<i>//Creates an Mongo Object</i>
<i class="var">$mongo</i> = new <i class="function">MongoManager();</i>

<i>//Automaticly connects you to the MongoClient.</i>
<i class="var">$mongo</i>-><i class="function">connect();</i>

<i>//Sets the current database name</i>
<i class="var">$mongo</i>-><i class="function">setDatabase(</i><i class="string">"name here"</i><i class="function">)</i>;
                 </pre>
             </div>
             <div class="card-action">
                 <a href="?page=documentation">Full documentation of the connection</a>
             </div>
         </div>
     </div>


     <!--         Card 2-->
<div class="col s12 m4">
    <div class="card">
        <div class="card-image">
            <span class="card-title black-text">Collect the data</span>
        </div>


        <div class="card-content">
            <p style="padding: 20px;">SQL</p>
                 <pre class="code">
<i>//give the query as parameter of the function</i>
<i class="var">$sql</i> = <i class="var">$db</i>-><i class="function">makeQuery("QUERY * HERE")</i>;

<i>//Fetch the data</i>
<i class="var">$fetch</i> = <i class="var">$sql</i>-><i class="function">fetchAll(<i class="var">$var</i>)</i>;
                 </pre>
            <p style="padding: 20px;">Mongo</p>
            <pre class="code"><i>//find a collection</i>
<i class="var">$mongo</i>-><i class="function">Find(</i><i class="string">"CollectionName"</i>, <i class="function">array(</i><i class="string">"data"</i><i class="function">)</i>;</pre>
        </div>
        <div class="card-action">
            <a href="?page=documentation">Full documentation of the data collection</a>
        </div>
    </div>
</div>
<!--         Card 3-->
<div class="col s12 m4">
         <div class="card">
             <div class="card-image">
                 <span class="card-title black-text">Use The data</span>
             </div>
             <div class="card-content">
                 <p style="padding: 20px;">Use the data to create you're website / web application / app</p>
                 <br>
                 <pre class="code">
<i>//Fetch the data</i>
<i class="var">$fetch</i> = <i class="var">$sql</i>-><i class="function">fetchAll(<i class="var">$var</i>)</i>;
&lt;?php <i class="function">var_dump(<i class="var">$sql</i>)</i> ?>
                 </pre>
                 <p style="padding: 20px;"> var_dump example of the documentation database, and an echo of the fetched data</p>
                 <pre class="code">
<i><?php var_dump($data[0]);
    ?></i>
&lt;?php <i class="function">echo <i class="var">$sql<i class="text">[<i class="int">0</i>][<i class="int">1</i>]</i></i></i>; ?>
                     </pre>
                 <p style="padding: 20px;">Output:
                 <br>
                     Connect to a database
                 </p>
             </div>
         </div>
</div>
 </div>
     <br>
     </div>
     <div id="gettingstarted" class="col s12 z-depth-3">
             <div class="row nomargin">
             <p class="gstext">
                 <div  class="col s6 safety">
                     <h1 class="gs"> Safety</h1>
                 The functions which are sensitive for hackers are as far as we know so good as safe, we use multiplair <strong>hashes</strong> , <strong>JWT</strong>(JSON web token) ,
                 <strong>private keys</strong> and <strong>sesions</strong> are getting regenerated. <strong class="">We don't provide 100% safety, because the framework is used with you're own code, and we can't prevent you from making mistakes in you're own code! </strong>
                     <br>
                     <br>
                     <a class="waves-effect waves-light btn whitebutton">Report errors</a><a style="margin-left: 20px;" class="waves-effect waves-light btn whitebutton">Feedback is welcome</a>
                 </div>
                 <div  class="col s6 pos">
                     <h1>Possibilities with Blurp</h1>
                 </div>
             </p>
             </div>
         </div>
     </div>


 </div>