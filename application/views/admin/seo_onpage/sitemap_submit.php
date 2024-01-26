<div class="content-wrapper" style="min-height: 369px;">
    <section class="content-header">
        <h1>Generate Slug / Sitemap</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body text-center">
                        <?php
                        $website = base_url();
                        $url = 'http://www.google.com/webmasters/sitemaps/ping?sitemap='.htmlentities($website.'/sitemap.xml');
                        $response = file_get_contents($url);
                        if($response){
                            echo $response;
                        }else{
                            echo "Failed to submit sitemap";
                        }

                        ?>
                        <h2></h2>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
</div>