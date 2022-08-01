<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Powered By: Manaknightdigital Inc. https://manaknightdigital.com/ Year: 2020*/
if ($layout_clean_mode) {
    echo '<style>#content{padding:0px !important;}</style>';
}
?>
<div class="tab-content mx-4 mt-3" id="nav-tabContent">
              <!-- Bread Crumb -->
<div aria-label="breadcrumb">
    <ol class="breadcrumb pl-0 mb-1 bg-background d-flex justify-content-center justify-content-md-start">
        <!-- <li class="breadcrumb-item active" aria-current="page">
            <a href="/admin/dashboard" class="breadcrumb-link">Dashboard</a>
        </li> -->
        <li class="breadcrumb-item active" aria-current="page">
            <a href="/admin/inventory_gallery_image_list/0" class="breadcrumb-link"><?php echo $view_model->get_heading();?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Edit
        </li>
    </ol>
</div>
<?php if (validation_errors()) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <?= validation_errors() ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (strlen($error) > 0) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (strlen($success) > 0) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="success">
                <?php echo $success; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
<div class="row mb-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="primaryHeading2 mb-4 text-md-left pl-3">
                    Edit <?php echo $view_model->get_heading();?>
                </h5>
                <?= form_open() ?>
                    				<div class="form-group col-md-5 col-sm-12">
					<label for="Inventory ID">Inventory ID <b class="required_field"> * </b></label>
					<input type="text" class="form-control data-input" id="form_inventory_id" name="inventory_id" value="<?php echo set_value('inventory_id', $this->_data['view_model']->get_inventory_id());?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 45)"/>
				</div>
				<div class="form-group col-md-5 col-sm-12 mb-4">
					<label for="Gallery Image">Gallery Image <b class="required_field"> * </b></label>
					<img class='edit-preview-image d-block' style="max-height:100px" id="output_gallery_image" src="<?php echo set_value('gallery_image', $this->_data['view_model']->get_gallery_image());?>" onerror=\"if (this.src != '/uploads/placeholder.jpg') this.src = '/uploads/placeholder.jpg';\"/>
					<br/><div class="btn btn-primary image_id_uppload_library btn-sm uppload-button  " data-image-url="gallery_image" data-image-id="gallery_image_id" data-image-preview="output_gallery_image" data-view-width="250" data-view-height="250" data-boundary-width="500" data-boundary-height="500">Choose Image</div>
					<div class='btn btn-success' onclick='show_image_gallery("gallery_image", "gallery_image_id")'>Gallery</div>					<input type="hidden" id="gallery_image" name="gallery_image" value="<?php echo set_value('gallery_image', $this->_data['view_model']->get_gallery_image());?>"/>
					<input type="hidden" id="gallery_image_id" name="gallery_image_id" value="<?php echo set_value('gallery_image_id', $this->_data['view_model']->get_gallery_image_id());?>"/>
				 <span id="gallery_image_complete" class="image_complete_uppload" ></span></div>				<div class="form-group col-md-5 col-sm-12">
					<label for="Image ID">Image ID </label>
					<input type="text" class="form-control data-input" id="form_gallery_image_id" name="gallery_image_id" value="<?php echo set_value('gallery_image_id', $this->_data['view_model']->get_gallery_image_id());?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 45)"/>
				</div>
				<div class="form-group col-md-5 col-sm-12">
					<label for="Status">Status <b class="required_field"> * </b></label>
					<select id="form_status" name="status" class="form-control data-input">
						<?php foreach ($view_model->status_mapping() as $key => $value) {
							echo "<option value='{$key}' " . (($view_model->get_status() == $key && $view_model->get_status() != '') ? 'selected' : '') . "> {$value} </option>";
						}?>
					</select>
				</div>

                    
                <div class="form-group col-md-5 col-sm-12">
                    <input type="submit" class="btn btn-primary ext-white mr-4 my-4" value="Submit">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>