                    <div class="container">
                      <table class="table table-responsive table-bordered table-sm " style="margin-top: 20px;margin-left: -500px;">
                        <thead class="thead">
                          <tr class="table_content" style="font-size:12px;">
                             
                            <th scope="col">News id</th>
                            <th scope="col" class="col-md-2">News Uploader Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Description</th>
                             <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="col-md-2">News Category Id</th>
                            <th scope="col" class="col-md-2">News Sub Category Id</th>
                            <th scope="col">View Count</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Breaking News</th>
                            <th scope="col">Publish Timestamp</th>
                            <th scope="col">Tag</th>
                            <th scope="col" class="col-md-2">News Speciality Id</th>
                            <th scope="col">Img Features</th>
                            <th scope="col" >News Reporter Id</th>
                            <th scope="col">Newspaper Id</th>
                            <th scope="col" >News Api Id</th>
                            <th scope="col">Guid</th>
                            <th class="col" class="col-md-6">Edit</th>
                            <th class="col" class="col-md-6">Delete</th>

                          </tr>

                        </thead>
                        <tbody class="tbody">
                          <?php 
                         
                          foreach($news_user as $data) 
                          {
                              ?>
                              <tr style="font-size:12px;">
                           
                            <td><?php echo $data["news_id"];?></td>
                            <td ><?php echo $data["news_uploader_id"];?></td>
                            <td><?php echo $data["title"];?></td>
                            <td><?php echo $data["summary"];?></td>
                            <td><?php echo $data["description"];?></td>
                            <td>
                              <img src="<?="../uploads/".$data['image'];?>" alt="image" height="20";width="20">
                            </td>
                            <td><?php echo $data["date"];?></td>
                            <td><?php echo $data["news_category_id"];?></td>
                            <td><?php echo $data["news_sub_category_id"];?></td>
                            <td><?php echo $data["view_count"];?></td>
                            <td><?php echo $data["timestamp"];?></td>
                            <td><?php echo $data["status"];?></td>
                            <td><?php echo $data["breaking_news"];?></td>
                            <td><?php echo $data["publish_timestamp"];?></td>
                            <td><?php echo $data["tag"];?></td>
                            <td><?php echo $data["news_speciality_id"];?></td>
                            <td><?php echo $data["img_features"];?></td>
                            <td><?php echo $data["news_reporter_id"];?></td>
                            <td><?php echo $data["newspaper_id"];?></td>
                            <td><?php echo $data["news_api_id"];?></td>
                            <td><?php echo $data["guid"];?></td>
                            <td class="col-md-12">
                              <a href="<?= base_url('editNews/'.$data['news_id']);?>" type="button" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                   <a href="<?= base_url('deleteNews/'.$data['news_id']);?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>

                          <?php } ?>
                          
                        </tbody>
                     </table>
                 </div>