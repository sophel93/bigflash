<?php if (have_rows('main_section')):?>
		
		<main id="primary" class="site-main">
			
			<?php while (have_rows('main_section')): the_row();?>
				
			
				<?php if  (get_row_layout() == 'content_row') :?>
					
					<?php $rows = get_row('content_row');?>
						
						<?php if ($rows['content_block_background_color'] == 1):
						
							$background_color ="#E7ECEF";
						else:
							$background_color="none";
						
						endif?>
					
					<div class="content-block" style="background-color:<?php echo $background_color;?>;">
						<div class="wrapper">
							<?php echo $rows['content_row_content'];?>
						</div>
					</div>

				<?php elseif (get_row_layout() == 'highlight_section'):
					
					$rows = get_row('highlight_section');?>
					
						
						<?php if ($rows['content_block_background_color'] == 1):
							
								$background_color ="#E7ECEF";
						else:
								$background_color="none";
						
						endif?>
						
						<div class="content-block" style="background-color:<?php echo $background_color;?>;">
							<div class="wrapper">
								<?php if ($rows['highlight_section_title']) :?>
									<h1 style="text-align: center;"><?php echo $rows['highlight_section_title'];?></h1>
								<?php endif?>
								<?php if (have_rows('highlight_block_column')):?>
									<ul class="highlight-row">
										<?php while (have_rows('highlight_block_column')) : the_row();
											$highlight_block_item = get_row('highlight_block_column');?>
											<li>
											<img src="<?php echo $highlight_block_item['highlight_block_item_image']?>">
												<a href=""><h2><?php echo $highlight_block_item['highlight_block_item_title'] ?></h2></a>
												<p><?php echo $highlight_block_item['highlight_block_item_content']?></p>
												
											</li>
										<?php endwhile;?>
									</ul>
								<?php endif?>
							</div>
						</div>

				<?php elseif (get_row_layout() == 'shortcode_row'):?>
					<div class="content-block">
						<div class="wrapper">
							<h1 style="text-align:center;"><?php the_sub_field('Shortcode_row_title');?></h1>
							<?php echo do_shortcode(get_sub_field('shortcode_input'));?>
						</div>
					</div>
				
				<?php elseif (get_row_layout() == 'team_members_section'):
					
					$rows = get_row('team_members_section');?>
					
						<?php if ($rows['content_block_background_color'] == 1):
							
								$background_color ="#E7ECEF";
							else:
								$background_color="none";
						
						endif?>
						
						<div class="content-block" style="background-color:<?php echo $background_color;?>;">
							<div class="wrapper">
								<?php if ($rows['team_members_section_title']) :?>
									<h1 style="text-align: center;"><?php echo $rows['team_members_section_title'];?></h1>
								<?php endif?>
								<?php if (have_rows('team_members_section_column')):?>
									<ul class="highlight-row">
										<?php while (have_rows('team_members_section_column')) : the_row();
											$team_member = get_row('team_members_section_column');?>
											<li>
												<img src="<?php echo $team_member['Team_member_image']?>">
												<h2><?php echo $team_member['Team_member_name'] ?></h2>
												<span><?php echo $team_member['Team_member_title']?></span>
												<br><a href="mailto:<?php echo $team_member['team_member_email']?>"><?php  echo $team_member['team_member_email']?></a>
												<br><a href="tel:<?php echo $team_member['team_member_tel']?>"><?php echo $team_member['team_member_tel']?></a>
											</li>
										<?php endwhile;?>
									</ul>
								<?php endif?>
							
							</div>
						</div>

						<?php elseif (get_row_layout() == 'multiple_columns_row'):
					
							$rows = get_row('multiple_columns_row');?>
					
						<?php if ($rows['content_block_background_color'] == 1):
							
								$background_color ="#E7ECEF";
							else:
								$background_color="none";
						
						endif?>
						
						<div class="content-block" style="background-color:<?php echo $background_color;?>;">
							<div class="wrapper">
								<?php if ($rows['multiple_columns_row_title']) :?>
									<h1 style="text-align: center;"><?php echo $rows['multiple_columns_row_title'];?></h1>
								<?php endif?>
								<?php if (have_rows('multiple_columns_row_column'))  :?>
									
									<div class="multiple-columns">
										<?php while (have_rows('multiple_columns_row_column')) : the_row();?>
											<?php if (get_row_layout() == 'multiple_columns_row_img_column'):
												$img = get_row('multiple_columns_row_img_column');?>
													<div>
														<img src="<?php echo $img['multiple_columns_row_img'];?>">
											</div>
											<?php elseif (get_row_layout() == 'multiple_columns_row_content_column'):
												$content = get_row('multiple_columns_row_content_column');?>
													<div>
														<p><?php echo $content['multiple_columns_row_content'];?>
											</div>
											<?php endif;?>
										<?php endwhile;?>
											</div>
								<?php endif?>
							
							</div>
						</div>
				
						<?php endif?>

			<?php endwhile?>
		</main><!-- #main -->	
	<?php endif?>