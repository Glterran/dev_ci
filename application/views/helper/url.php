<h1>
URL Helper
</h1>
<div class="contents helper">
	<ul>
		<li>
			<div class="title">
				site_url()
			</div>
			<div class="description">
				config.php의 index.php 파일 함수로 전달 된 URL 새그먼트, url_suffix가 포함된 url값이 반환
			</div>
			<div class="result">
				결과 - <?= site_url() ?>
			</div>
		</li>
		<li>
			<div class="title">
				base_url()
			</div>
			<div class="description">
				config.php의 BASE_URL 값이 반환
			</div>
			<div class="result">
				결과 - <?= base_url() ?>
			</div>
		</li>
		<li>
			<div class="title">
				current_url()
			</div>
			<div class="description">
				현재 페이지의 URL 값이 반환
			</div>
			<div class="result">
				결과 - <?= current_url() ?>
			</div>
		</li>
		<li>
			<div class="title">
				uri_string()
			</div>
			<div class="description">
				현재 페이지의 URI Segment 값을 반환
			</div>
			<div class="result">
				결과 - <?= uri_string() ?>
			</div>
		</li>
		<li>
			<div class="title">
				index_page()
			</div>
			<div class="description">
				config.php의 index_page 값을 반환
			</div>
			<div class="result">
				결과 - <?= index_page() ?>
			</div>
		</li>
		<li>
			<div class="title">
				anchor($uri="URI String", $title="Anchor Title", $attributes="HTML attributes")
			</div>
			<div class="description">
				HTML Hyperlink를 사이트 URL에 맞게 생성 해준다
			</div>
			<div class="result">
				결과 - <?= anchor("uristring","앵커 생성") ?>
			</div>
		</li>
		<li>
			<div class="title">
				anchor_popup($uri="URI String", $title="Anchor Title", $attributes="HTML attributes")
			</div>
			<div class="description">
				HTML Hyperlink를 사이트 URL에 맞게 팝업창을 띄어준다
			</div>
			<div class="result">
				결과 - <?= anchor("uristring","팝업창", array("target" => "_blank")) ?>
			</div>
		</li>
	</ul>
</div>