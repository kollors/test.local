	<section id="contentBlock">
<?foreach($result as $elem):?>
		<article>
			<hgroup class="contentTitle">
				<h3><?=$elem['title'];?></h3>
				<h4><?=$elem['p_date'];?></h4>
			</hgroup>
			<section class="contentText">
				<?=$elem['p_text']."\n";?>
			</section>
			<section class="commentText">
<?foreach($comments as $elem1):?>
				<b><?=$elem1['c_name'];?> (<?=$elem1['c_date'];?>)</b>
				<p><?=$elem1['c_text'];?></p>
				<hr />
<?endforeach;?>
				<?=form_open('comments/add')."\n";?>
					<input type="hidden" name="post_id" value="<?=$elem['id'];?>" />
					<label>Ваше имя</label>
					<input type="text" name="c_name" />
					<label>Ваш комментарий</label>
					<textarea name="c_text"></textarea>
					<input type="submit" value="Отправить"/>
				</form>
			</section>
		</article>
<?endforeach;?>
	</section>
