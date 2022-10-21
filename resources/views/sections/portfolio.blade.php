        <!-- Portfolio-->
        <section id="portfolio">
            <div class="container-fluid p-0" >
                <div class="row g-0" style="justify-content: center">
                    <div class="col-lg-4 col-sm-6" >
                        <a class="portfolio-box"  title="Project Name" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Bedroom"
                        data-bs-description="Description Bedroom">
                            <img class="img-fluid pf-img" src="{{URL::to('/')}}/images/instalation.png"alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Bedroom </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        
                        <a class="portfolio-box"  title="Project Name" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Bathroom"
                        data-bs-description="Description Bathroom">
                        
                            <img class="img-fluid pf-img" src="{{URL::to('/')}}/images/bathroom.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Bathroom</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"  title="Kitchen" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Kitchen"
                        data-bs-description="Description Kitchen">
                            <img class="img-fluid pf-img"  src="{{URL::to('/')}}/images/kitchen.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Kitchen</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"  title="Project Name" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Decoration"
                        data-bs-description="Description decoration">
                        
                            <img class="img-fluid pf-img" src="{{URL::to('/')}}/images/painting.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Decoration</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"  title="Project Name" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Plumbing"
                        data-bs-description="Description Plumbing">
                            <img class="img-fluid pf-img"  src="{{URL::to('/')}}/images/plumbing.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Plumbing</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"  title="Project Name" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Removal"
                        data-bs-description="Description Removal">
                            <img class="img-fluid pf-img" src="{{URL::to('/')}}/images/renovation.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Demolition</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Description:</label>
                          <a type="text" class="modal-description" id="recipient-name"></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>

