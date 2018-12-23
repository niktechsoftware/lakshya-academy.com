			<div class="table-elements">
                <table class="table table-bordered table-striped table-responsive">
					<thead>
	                    <tr>
	                      <th>#</th>
	                      <th>Test Id</th>
	                      <th>Set</th>
	                      <th>Name</th>
	                      <th>Right</th>
	                      <th>Wrong</th>
	                      <th>Left</th>
	                      <th>score</th>
	                      <th>sec1</th>
	                      <th>sec2</th>
	                      <th>sec3</th>
	                      <th>sec4</th>
	                    </tr>
					</thead>
                  	<tbody>
                  		<?php $i = 1; foreach($res->result() as $row): ?>
	                    <tr>
	                      <td><?php echo $i; ?></td>
	                      <td><?php echo $row->test_id;?></td>
	                      <td><?php echo $row->set;?></td>
	                      <td><?php echo $row->name;?></td>
	                      <td><?php echo $row->right;?></td>
	                      <td><?php echo $row->wrong;?></td>
	                      <td><?php echo $row->left;?></td>
	                      <td><?php echo $row->score;?></td>
	                      <td><?php echo $row->sec1;?></td>
	                      <td><?php echo $row->sec2;?></td>
	                      <td><?php echo $row->sec3;?></td>
	                      <td><?php echo $row->sec4;?></td>
	                    </tr>
	                    <?php endforeach; ?>
                  	</tbody>
				</table>
			</div>