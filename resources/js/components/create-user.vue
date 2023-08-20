<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Create User</div>
            <div class="card-body">
              <form method="POST" action="http://localhost/login">
                <input type="hidden" 
                    name="_token"   
                    :_token ="csrf"                
                />
                <div class="row mb-3">
                  <label
                    for="first_name"
                    class="col-md-4 col-form-label text-md-end"
                    >First Name</label
                  >
                  <div class="col-md-6">
                    <input
                      id="first_name"
                      type="text"
                      class="form-control"
                      name="first_name"
                      required=""
                      autocomplete="first_name"
                      autofocus=""
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <label
                    for="last_name"
                    class="col-md-4 col-form-label text-md-end"
                    >last Name</label
                  >
                  <div class="col-md-6">
                    <input
                      id="last_name"
                      type="text"
                      class="form-control"
                      name="last_name"
                      required=""
                      autocomplete="last_name"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12 offset-md-3">
                    <label for="image">Image</label>
                    <input
                      type="file"
                      class="form-control-file"
                      id="image"
                      name="image"
                      required
                      style="margin-left: 10%"
                    />
                  </div>
                </div>
                <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      Create User
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, watch, reactive } from "vue";

export default {
  setup() {
    const thumbnail = ref(null);
    const imageInput = ref(null);
    const csrf =  document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    watch(imageInput, () => {
      const file = imageInput.value.files[0];
      if (!file.type.match("image.*")) {
        alert("Please select a valid image file.");
        return;
      }
      thumbnail.value = URL.createObjectURL(file);
    });

    return {
      thumbnail,
      csrf
    };
  },
};
</script>
