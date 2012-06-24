<h1>Add a New Project</h1>
<form action="<?=url_for('projects/new')?>" method="post">
	<h2>Repository</h2>
    
    <div class="well">
    <div class="control-group">
      <label class="control-label" for="appendedInputButton">Append with button</label>
      <div class="controls">
        <div class="input-append btn-group">
          <input class="span5" id="appendedInputButton" size="16" type="text" style="float:left;">
          <a class="btn dropdown-toggle span3" data-toggle="dropdown" href="#">Select an existing repository
    		<span class="caret"></span>
  		  </a>
          <ul class="dropdown-menu span8">
            <li><a href="#">Switch Rabbit</a></li>
            <li><a href="#">Wonder Lime</a></li>
            <li><a href="#">TIAA-CREF</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    
    <div class="well">
		<label><span class="span2">Name:</span> <input type="text" name="repositroy_name" /></label>
		<label><span class="span2">Remote Origin:</span> <input type="text" name="repository_remote" /></label>
	</div>
    <h2>Project</h2>
    <div class="well">
	<label><span class="span2">Project Name:</span> <input type="text" name="project_name" /></label>
	<label><span class="span2">Branch:</span> <input type="text" name="project_branch" /></label>
    </div>
	<input type="submit" class="btn btn-primary" value="Create"/>
</form>