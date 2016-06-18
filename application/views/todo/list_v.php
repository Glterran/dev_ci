<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">번호</th>
			<th scope="col">내용</th>
			<th scope="col">시작일</th>
			<th scope="col">종료일</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($list as $item) { ?>
		<tr>
			<th scope="row">
				<?= $item->id ?>
			</th>
			<td><a rel="external" href="/dev/todo/view/<?= $item->id ?>"><?= $item->content ?></a></td>
			<td><time datetime="<?= mdate("%Y-%M-%j", human_to_unix($item->created_on)) ?>"><?= $item->created_on ?></time></td>
			<td><time datetime="<?= mdate("%Y-%M-%j", human_to_unix($item->due_date)) ?>"><?= $item->due_date ?></time></td>
		</tr>
<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="4"><a href="/dev/todo/write/" class="btn btn-success">쓰기</a></th>
		</tr>
	</tfoot>
</table>