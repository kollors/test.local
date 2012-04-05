		<article>
			<?=form_open('adm/posts/add')."\n";?>
				<hgroup class="contentTitle">
					<h3><input type="text" name="title" /><input type="text" name="cat_id" /></h3>
					<h4><?=date('Y-m-d');?></h4>
				</hgroup>
				<section class="contentText">
					<textarea name="p_text"></textarea>
				</section>
				<input type="submit" value="Отправить"/>
			</form>
		</article>
