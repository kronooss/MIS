<?php 
  use yii\helpers\Url;
  use app\models\RefClass;
 
 ?>     
   <style>
th, tr, td  {
border:1px solid #469DC8;
padding:10px;
font-size:1.5em;
}

tr:nth-child(even){background-color: #f2f2f2}
</style> 
                  <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>SR</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Group</th>
                            <th>Section</th>
                            <th>Next School</th>
                            <th>Date</th>
                            
                          </tr>
                           </thead>
                           <tbody>
                            <?php
                            $count=0;
                           // echo '<pre>';print_r($year);die;
                             foreach ($leaveInfo as $leaveInfo) {
                              $count++;

                              ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $leaveInfo->stu->user->first_name .' '.$leaveInfo->stu->user->first_name ?></td>
                                <td><?php echo $leaveInfo->class->title?></td>
                                <td><?php if($leaveInfo->group_id == ''){echo "N/A"; }else{echo $leaveInfo->group->title;}?></td>
                  <td><?php echo $leaveInfo->section->title?></td>
                  <td><?php echo $leaveInfo->next_school?></td>
                  <td><?php echo date('d-m-Y',strtotime($leaveInfo->created_date))?></td>
                                
                            </tr>
                            <?php } ?>
                            </tbody>
                     </table>
                    