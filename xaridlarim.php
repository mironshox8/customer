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



                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="c ol-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header">
              
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanish muvaffaqiyatsiz: " . $conn->connect_error);
}

// Ma'lumotlarni olish


$sql = "SELECT sale.id,sale.mahsulot,sale.massa,sale.sana,mahsulotlar.unical_id,mahsulotlar.mahsulot_nomi,narx.mahsulot_id,narx.narx FROM `sale`,`mahsulotlar`,`narx` WHERE sale.mahsulot = mahsulotlar.unical_id AND mahsulotlar.unical_id  = narx.mahsulot_id";
$result = $conn->query($sql);
?>

    <div class="container mt-5">
        <h2 class="text-center mb-4"><b>SOTILGAN MAHSULOTLAR</b></h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                <th style="color:white;">№</th>
                <th style="color:white;">Rasmi</th>
                <th style="color:white;">Mahsulot</th>
                    <th style="color:white;">Massa (g)</th>
                    <th style="color:white;">Narx (so'm)</th>
                    <th style="color:white;">Summasi (so'm)</th>
                    <th style="color:white;">Sanasi</th>
                </tr>
            </thead>
            <tbody>
            
            <?php 
if ($result->num_rows > 0) {
    $n = 1;
    while ($row = $result->fetch_assoc()) {
        $u = round($row["massa"], 2);
        $bosh = ucfirst(strtolower($row["mahsulot_nomi"]));
        $image_path = "images/" . strtolower(str_replace(' ', '_', $row["mahsulot_nomi"])) . ".jpg";
        $s = $row['massa'] * $row['narx']/1000;
                    $tosh = $row['massa']/1000;
                    $total_sum += $s;
        echo "<tr>
                <td>" . htmlspecialchars($n) . "</td>
                <td><img src='" . htmlspecialchars($image_path) . "' alt='" . htmlspecialchars($bosh) . "' width='100' height='80'></td>
                <td>" . htmlspecialchars($bosh) . "</td>
                <td>" . htmlspecialchars($u) . "</td>
                <td>" . htmlspecialchars($row["narx"]) . "</td>
                <td>" . htmlspecialchars($s) . "</td>
                
                <td>" . htmlspecialchars($row["sana"]) . "</td>
              </tr>";
        $n++;
    }



                } else {
                    echo "<tr><td colspan='3' class='text-center'>Ma'lumot yo'q</td></tr>";
                }
                ?>
                <tr class="total-row" style="font-weight: bold;">
                    <td colspan="5" class="text-left" >Umumiy summa:</td>
                    <td colspan="2"><?php echo round($total_sum/2); ?> so‘m</td>
                </tr>
            </tbody>
        </table>
    </div>

              
            




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