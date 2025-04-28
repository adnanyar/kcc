<script>
import Footer from "./Footer.vue";
import About from "./About.vue";
export default {
  components: {
    Footer,
    About,
  },

  props: {
    questions: Object,
  },

  // data() {
  //   return {
  //     question: "",
  //   };
  // },
  created() {
    // this.questions=window.questions;
    // console.log(this.questions);
    console.log(this.questions);
  },
};
</script>
  







<template>
  <!-- <ul style="list-style-type: none">
    <li v-for="question in questions" :key="question">
      <div
        class="container bg-danger"
        style="height: 200px; border: 2px solid white"
      >
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <a href="" style="background-color: white">
              <h1>{{ question.q_title }}</h1>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul> -->
  <!-- <li v-for="(question) in questions" :key="question">
       {{ question.q_title }}
      </li> -->
  <div style="position: sticky; top: 0px">
    <div class="container-fluid " style="background-color:aliceblue;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <form action="" class="">
              <input type="search" style="width: 70%; height: 40px" />
              <button style="height: 40px"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-6 bg-warning m-0 p-0">
          <div class="dropdown">
            <button class="dropbtn"><i class="bi bi-house"></i></button>
            <div class="dropdown-content">
              <a
                style="
                  background-color: lightcoral;
                  border: 0.5px solid white;
                  font-family: fantasy;
                  font-size: 12px;
                  font-style: italic;
                "
                href="#"
                >View Profile</a
              >
              <a
                style="
                  background-color: lightcoral;
                  border: 0.5px solid white;
                  font-family: fantasy;
                  font-size: 12px;
                  font-style: italic;
                "
                href="#"
                >Edit Profile</a
              >
              <a
                style="
                  background-color: lightcoral;
                  border: 0.5px solid white;
                  font-family: fantasy;
                  font-size: 12px;
                  font-style: italic;
                "
                href="#"
                >Log Out</a
              >
            </div>
          </div>
        </div>
        <div
          class="col-6 bg-warning d-flex justify-content-end align-items-end"
        >
          <div>
            <p>
              <a href="#" style="text-decoration: none; color: white"
                >Ask <i class="bi bi-plus-circle-fill"></i
              ></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- spacer -->
  <div class="container-fluid " style="height: 20px; background-color: aliceblue;"></div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-9 m-0 p-0" style="border:10px solid whitesmoke;">
        
        <!-- We will apply display property here to hide and show the section -->
        <div
          class="overflow-auto"
          style="height: 700px; width: 100%; background-color: white; "
        >
          <ul style="list-style-type: none;">
            <li v-for="question in questions" :key="question">
              <div
                class="container"
                style="height: 200px; border: 20px solid wheat;background-color: whitesmoke;"
              >
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <a
                      class="text-decoration-none"
                      :href="'/users/questiondetail?id=' + question.id"
                      style="background-color: white">
                      <h3 class="text-decoration-none">
                        {{ question.q_title }}
                      </h3>
                
                      
                    </a>
                   
                  </div>
                  <div v-html="question.q_description" class="bg-white d-flex justify-content-center" style="height:90px; overflow:scroll;" >
                       
                   </div>
                  <div class="bg-white d-flex justify-content-center" style="height:50px; " >
                      <p style="margin:2px; padding:2px;">created at:{{question.created_at}}</p>
                      <p style="margin:2px; padding:2px;">program:{{question.q_programe}}</p>
                      <p style="margin:2px; padding:2px;">name:{{question.q_name}}</p>
                      <p style="margin:2px; padding:2px;">email:{{question.q_email}}</p>
                      <p style="margin:2px; padding:2px;">updated at:{{question.updated_at}}</p>
                   </div>

                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div
        class="col-3 overflow-auto"
        style="height: 700px; background-color: whitesmoke; border: 10px solid white;"
      >
        <div class="row d-flex justify-content-end">
          <div
            class="col-12 bg-info d-flex justify-content-center"
            style="width: 100%; height: 80px"
          >
            <div>
              <h3 style="color: white">Want To Ask Question?</h3>
              <p
                class="d-flex justify-content-center"
                style="
                  color: white;
                  font-family: sans-serif;
                  font-style: italic;
                  font-size: 14px;
                "
              >
                Pick The Category Place The Question!
              </p>
            </div>
          </div>
          <div
            class="
              col-12
              bg-danger
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <!-- <a :href="'/checkout?id='+id+'&name='+name+'&address='+address">Checkout</a> -->
            <a
              :href="'/users/createask?cat=' + 'Swen'"
              style="text-decoration: none; color: white"
              >Software Engineering</a
            >
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Computer Engineering</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Artificial Intelligence</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center"
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Machine Learning</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Graphic Design</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href="">Civil Engineering</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Mechanical Engineering</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Electrical Engineering</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Computer Science</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Information Technology</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Cyber Security</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Human Sciences</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> General Questions</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Admin Related</a>
          </div>
          <div
            class="
              col-12
              bg-info
              d-flex
              justify-content-center
              align-items-center
            "
            style="
              width: 90%;
              height: 40px;
              border-radius: 5px 0px 0px 50px;
              border: 0.5px solid white;
            "
          >
            <a href=""> Find More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Asked Question Section -->

  <div
    class="d-flex justify-content-center"
    style="height: 200px; background-color: aqua"
  >
    <h3>User Asked Section</h3>
  </div>
  <!-- Asked Question Section -->
  <Footer></Footer>
</template>





<style>
.dropbtn {
  background-color: #4caf50;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block; 
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>