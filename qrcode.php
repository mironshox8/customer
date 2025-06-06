<?php
   include 'config.php';
   if (!isset($_SESSION['admin'])) {
       header("Location: index.php");
       exit();
   }
   ?>

   <?php
   include 'tepa.php';
   
   ?>
   <?php
$user_id = $_SESSION['admin']; // Foydalanuvchi ID (odatda sessiyadan olinadi)
?>



                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="c ol-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header" style="text-align:center;"> 
                  <h2>Iltimos,QRcode yaratish uchun tugmachani bosing</h2>
    
    <form method="POST">
        <input type="hidden" name="user_id" value="<?= substr($user_id, 7) ?>">
        <button type="submit" name="pay" type="button" class="btn btn-info">QRcode yaratish</button>
    </form>

    <?php
    if (isset($_POST['pay'])) {
        $user_id = $_POST['user_id'];
        
        // FastAPI serveriga POST so'rov yuborish
        $ch = curl_init('http://127.0.0.1:8000/generate_qr/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['user_id' => $user_id]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        
        $qr_image = curl_exec($ch);
        curl_close($ch);

        // QR kodni chiqarish
        $base64 = base64_encode($qr_image);
        echo "<h3>QR Code:</h3>";
        echo "<img src='data:image/png;base64,{$base64}' alt='QR Code'>";
    }
    ?>
            




                  </div>
                </div>
              </div>
            </div>
            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2025 <div class="bullet"></div> Design By <a href="https://multinity.com/">Qorako'l IMI</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Dushanba", "Seshanba", "Chorshanba", "Payshanba", "Juma", "Shanba", "Yakshanba"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
</body>
</html>