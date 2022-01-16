<?php 
use yii\helpers\Url;

 ?>
 <style type="text/css">#paszonetoroute:hover{color:blue;}</style>
 <input type="submit" name="Generate Report" id="overalltransportzone" class="btn btn-default pull-right" value="Generate Report" data-url=<?php echo Url::to(['reports/get-zone-generic-pdf']) ?> />
                  <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>SR</th>
                            <th>Zone</th>
                            <th>Total Students</th>
                            

                            
                          </tr>
                        </thead>
                            <tbody>
                            <?php 
                            $count=0;
                            foreach ($zone as $queryy) {
                              $count++;
                              ?>
                            <tr>
                            <td><?= $count; ?></td>
                                <td><input type="text" name="" id="paszonetoroute" value="<?= $queryy['zone_name']?>" data-zoneid=<?= $queryy['zone_id'];?> data-url= <?= Url::to(['reports/getroute-zonewise']) ?> style="border: none;cursor: pointer;background: none!important;text-decoration: underline;" readonly/>
                                </td>
                                <td><?= $queryy['no_of_students_availed_transport'];?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                     </table>