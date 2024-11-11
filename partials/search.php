<span class="mcp-search">
  <!--Search-->
  <div class="bg-custom" style="padding-top: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-8 col-sm-8">
          <form action="<?= $urldomain; ?>/search" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" id="keyword" name="keyword" autocomplete="off" placeholder="Pencarian..." aria-label="Pencarian..." aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <style>
              #res {
                position: absolute;
                width: 90%;
                max-width: 90%;
                cursor: pointer;
                overflow-y: auto;
                max-height: 400px;
                box-sizing: border-box;
                z-index: 2;
                border-color: white;
                margin-top: -2px;
                color: #000;
              }

              .link-class {
                border-color: white;
              }

              .list-group {
                border-radius: 0;
              }

              .link-class:hover {
                background-color: #fff;
                color: #000;
                cursor: pointer;
              }
            </style>
            <div class="container">
              <ul class="list-group" style="margin-left: 0!important;" id="res"></ul>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-2"></div>
      </div>
    </div>
  </div>
</span>