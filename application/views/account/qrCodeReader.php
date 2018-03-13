<div id="app">
     <div class="sidebar">
       <section class="cameras">
         <h2>Cameras</h2>
         <ul>
           <li v-if="cameras.length === 0" class="empty">No cameras found</li>
           <li v-for="camera in cameras">
             <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
             <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
               <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
             </span>
           </li>
         </ul>
       </section>
       <section class="scans"> 
         <ul v-if="scans.length === 0">
           <li class="empty">No scans yet</li>
         </ul>
         <transition-group name="scans" tag="ul">
           <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
         </transition-group>
       </section>
     </div>
     <script>if(scans.length > 0){ console.log(scans.length); }</script>
     <div class="preview-container">
       <video id="preview"></video>
     </div>
   </div>
   <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
