	<section id="navigationBlock">
		<aside>
			<h3 class="navigationTitle">Последние посты</h3>
			<ul class="navigationList">
<?foreach($posts_menu as $elem):?>
				<li><a href="<?=base_url();?>blog/post/<?=$elem['id'];?>"><?=$elem['title'];?></a></li>
<?endforeach;?>
			</ul>
		</aside>
		<aside>
			<h3 class="navigationTitle">Категории</h3>
			<ul class="navigationList">
<?foreach($cats_menu as $elem):?>
				<li><a href="<?=base_url();?>blog/cat/<?=$elem['id'];?>"><?=$elem['title'];?></a></li>
<?endforeach;?>
			</ul>
		</aside>
	</section>
