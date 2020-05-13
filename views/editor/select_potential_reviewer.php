<section id="subintro">
	<div class="jumbotron subhead" id="overview">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="centered">
						<h3>Pilih Reviewer</h3>
						<p>
							Untuk mengerjakan tugas anda
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="maincontent">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="tagline centered">
					<div class="row">
						<div class="span12">
							<div class="tagline_text">
								<div align="center">

									<form action="<?= base_url('editorctl/selectingpotentialreviewer');?>" method="post">

										<h3>Silahkan pilih artikel dan reviewer</h3>
										<p>Anda dapat memilih lebih dari satu reviewer dengan menekan tombol <code>ctrl</code></p>

										<?php if ($msg != '') : ?>
											<div class="alert alert-danger" role="alert">
												<?php echo $msg; ?>
											</div>
										<?php endif; ?>

										<table>
											<tr>
												<td>Judul</td>
												<td>:</td>
												<td>
													<?php
													$mapped_task[''] = '-Select Task-';
													foreach ($tasks as $task) {
														$mapped_task[$task['id_task']] = $task['judul'];
													}
													echo form_dropdown('article', $mapped_task, $mapped_task['']);
													?>
												</td>
											</tr>

											<tr>
												<td>Reviewer</td>
												<td>:</td>
												<td>

													<select name="reviewers[]" multiple>
														<?php foreach($reviewers as $item): ?>
															<option value="<?= $item['id_reviewer'] ?> "><?= $item['nama'] ?> </option>
														<?php endforeach; ?>
													</select>

												</td>
											</tr>

											<tr>
												<td colspan="3" class="centered">
													<input type="submit" class="btn btn-success" value="Pilih">
												</td>
											</tr>

										</table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end tagline -->
			</div>
		</div>
	</div>
</section>