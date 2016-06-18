<article id="board_area">
	<header>
		<h1>Todo 쓰기</h1>
	</header>

	<form class="form-horizontal" method="post" action="" id="write_action">
	  <fieldset>
	    <div class="control-group">
	      <label class="control-label" for="input01">내용</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="input01" name="content" value="<?= set_value('content') ?>">
			<p class="help-block"><?= form_error('content') ?></p>
	      </div>
	      <label class="control-label" for="input02">시작일</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="input02" name="created_on" value="<?= set_value('created_on') ?>">
			<p class="help-block"><?= form_error('created_on') ?></p>
	      </div>
		  <label class="control-label" for="input03">종료일</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="input03" name="due_date" value="<?= set_value('due_date') ?>">
			<p class="help-block"><?= form_error('due_date') ?></p>
	      </div>

	      <div class="form-actions">
	        <input type="submit" class="btn btn-primary" id="write_btn" value="작성"></button>
	      </div>
	    </div>
	  </fieldset>
	</form>
</article>