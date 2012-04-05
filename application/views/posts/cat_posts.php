	<section id="contentBlock">
<?foreach($result as $elem):?>
		<article>
			<hgroup class="contentTitle">
				<h3><a href="<?=base_url();?>blog/post/<?=$elem['id'];?>"><?=$elem['title'];?></a></h3>
				<h4><?=$elem['p_date'];?></h4>
			</hgroup>
			<section class="contentText">
				<?=$elem['p_text']."\n";?>
			</section>
		</article>
<?endforeach;?>
	</section>
