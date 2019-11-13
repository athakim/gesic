<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>GesIC</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
        <!-- Bulma Version 0.8.x-->
        <link rel='stylesheet' href='https://unpkg.com/bulma@0.8.0/css/bulma.min.css'>
        <link rel="stylesheet" href="../css/kanban.css">
        <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="container ">
            <div class="columns ">
                <div class="column is-one-quarter">
                    <img src="{{asset('images/logo-ic.png')}}" alt="Gestion des IC"/>
                </div>
            <div class="column">
                <div class="card">
                <div class="card-content">
                    <div class="content">
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-large" type="search"/>
                            <span class="icon is-medium is-left">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
             </div>
        </section>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">

                    <nav class="level">
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">Total IC</p>
                          <p class="title">3,456</p>
                        </div>
                      </div>
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">Sans positionnemnt</p>
                          <p class="title">123</p>
                        </div>
                      </div>
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">Rouges</p>
                          <p class="title">456K</p>
                        </div>
                      </div>
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">No DDC</p>
                          <p class="title">789</p>
                        </div>
                      </div>
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">HDO/JMR</p>
                          <p class="title">789</p>
                        </div>
                      </div>
                      <div class="level-item has-text-centered">
                        <div>
                          <p class="heading">CSA/FGA</p>
                          <p class="title">789</p>
                        </div>
                      </div>
                    </nav>
                </div>
            </div>

        </section>
        
        <div class="box cta">
        <div class="columns is-mobile is-centered">
            <div class="field is-grouped is-grouped-multiline">
                <div class="control"><span class="tag is-link is-large">Link</span></div>
                <div class="control"><span class="tag is-success is-large">Success</span></div>
                <div class="control"><span class="tag is-black is-large">Sans Positionnement</span></div>
                <div class="control"><span class="tag is-warning is-large">Warning</span></div>
                <div class="control"><span class="tag is-danger is-large">Danger</span></div>
                <div class="control"><span class="tag is-info is-large">No DDC</span></div>
            </div>
        </div>
        </div>
<section class="container">

<table class="table is-stripped is-fullwidth">
  <thead>
    <tr>
        <th></th>
        <th>Prénom & Nom</th>
        <th>Qualification </th>
        <th>Dt Dispo. </th>
        <th colspan="2">Positionnement</th>
        <th>BM</th>
        <th>Pôle</th>
        <th>Durée IC</th>
        <th>DDC</th>
        <th>Actions</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
        <td class=""><span class=" icon has-text-danger"><i class="fas fa-ban"></i></span></td>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Hakim AIT TAYEB</a>
        </td>
        <td>Directeur de projet sénior</td>
        <td>23/10/19</td>
        <td>
             <a class="tag is-success" href="">+</a>
        </td>
        <td>
            <div class="tags has-addons">
                <span class="tag">BNP</span>
                <a class="tag is-info" href="#colors">HAI</a>
            </div>
            <!-- <div class="tags has-addons">
                <span class="tag is-danger">EDF(HAI)</span>
                <a class="tag is-delete"></a>
            </div> -->

        </td>
        <td><span class="tag">ATR</span></td>
        <td><span class="tag">HDO/JMR</span></td>
        <td><span class="tag"><i class="fas fa-clock"></i> 2M 3S 4J</span></td>
        <td>
            <span class="icon">
                <a href="" class="tag is-info"><i class="fas fa-download"></i></a>
                 <!-- fa-times -->
            </span>
        </td>
        <td></td>
    </tr>
     <tr>
        <td class=""><span class=" icon has-text-warning"><i class="fas fa-exclamation-triangle "></i></span></td>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Christophe DRIEUX</a>
        </td>
        <td>Process et Risques</td>
        <td>23/10/19</td>
        <td>
             <a class="tag is-success" href="">+</a>
        </td>
        <td>
            <div class="tags has-addons">
                <span class="tag">BNP</span>
                <a class="tag is-info" href="#colors">HAI</a>
                
                

            </div>


            <!-- <div class="tags has-addons">
                <span class="tag is-danger">EDF(HAI)</span>
                <a class="tag is-delete"></a>
            </div> -->
        </td>
        <td><span class="tag">HAI</span></td>
        <td><span class="tag">HDO/JMR</span></td>
        <td><span class="tag"><i class="fas fa-clock"></i> 2M 3S 4J</span></td>
        <td>
            <span class="icon">
                <a href="" class="tag is-info"><i class="fas fa-download"></i></a>
                 <!-- fa-times -->
            </span>
        </td>
        <td></td>
    </tr>
     <tr>
        <td class=""><span class=" icon has-text-info "><i class="fas fa-info-circle"></i></span></td>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Ismail HEBIB</a>
        </td>
        <td>Service delivery Manager</td>
        <td>23/10/19</td>
        <td>
             <a class="tag is-success" href="">+</a>
        </td>
        <td>
            <div class="field is-grouped is-grouped-multiline">
              <div class="control">
                <div class="tags has-addons">
                  <span class="tag is-success">BNP(HAI)</span>
                  <a class="tag is-delete"></a>
                </div>
              </div>

              <div class="control">
                <div class="tags has-addons">
                  <span class="tag is-link">ITCE(PBE)</span>
                  <a class="tag is-delete"></a>
                </div>
              </div>

              <div class="control">
                <div class="tags has-addons">
                  <a class="tag is-link">EDF(ATR)</a>
                  <a class="tag is-delete"></a>
                </div>
              </div>

              <div class="control">
                <div class="tags has-addons">
                  <a class="tag is-link">Air liquid(VCA)</a>
                  <a class="tag is-delete"></a>
                </div>
              </div>

              <div class="control">
                <div class="tags has-addons">
                  <a class="tag is-link">Open Source</a>
                  <a class="tag is-delete"></a>
                </div>
              </div>

              <div class="control">
                <div class="tags has-addons">
                  <a class="tag is-link">Community</a>
                  <a class="tag is-delete"></a>
                </div>
              </div>

            </div>
            
        </td>
        <td><span class="tag">CGU</span></td>
        <td><span class="tag">CSA/FGA</span></td>
        <td><span class="tag"><i class="fas fa-clock"></i> 2M 3S 4J</span></td>
        <td>
            <span class="icon">
                <span class="tag is-dark"><i class="fas fa-window-minimize "></i></span>
                 <!-- fa-times -->
            </span>
        </td>
        <td>
            

        </td>
    </tr>
         <tr>
        <td class=""><span class=" icon has-text-warning"><i class="fas fa-exclamation-triangle "></i></span></td>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Christophe DRIEUX</a>
        </td>
        <td>Process et Risques</td>
        <td>23/10/19</td>
        <td>
             <a class="tag is-success" href="">+</a>
        </td>
        <td>
            <div class="tags has-addons">
                <span class="tag">BNP</span>
                <a class="tag is-info" href="#colors">HAI</a>
                
                

            </div>


            <!-- <div class="tags has-addons">
                <span class="tag is-danger">EDF(HAI)</span>
                <a class="tag is-delete"></a>
            </div> -->
        </td>
        <td><span class="tag">HAI</span></td>
        <td><span class="tag">HDO/JMR</span></td>
        <td><span class="tag"><i class="fas fa-clock"></i> 2M 3S 4J</span></td>
        <td>
            <span class="icon">
                <a href="" class="tag is-info"><i class="fas fa-download"></i></a>
                 <!-- fa-times -->
            </span>
        </td>
        <td></td>
    </tr>
  </tbody>
</table>
</section>
<section class="container">
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <a class="pagination-previous">Previous</a>
        <a class="pagination-next">Next page</a>
        <ul class="pagination-list">
            <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
            <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
            <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
        </ul>
    </nav>

</section>
<div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow">

    </div>
</div>

<footer>
<div class="box cta">
    <div class="columns is-mobile is-centered">
        <div class="field is-grouped is-grouped-multiline">
            <p class="">Développé par athakim - codeservio.fr </p>
        </div>
    </div>
</div>
</footer>

<script src="{{asset('/js/bulma.js')}}"></script>
</body>
</html>