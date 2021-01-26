<!--header-->
<?php include '../includes/header-page.php'; ?>

<div class="landing-page-image-container">
  <img src="../assets/img/permis/1.jpg" alt="Permis accelere foto" />
</div>

<div class="container-fluid">
  <div class="landing-page-description">
    <div class="jumbotron row my-6">
      <div class="col-12 col-md-8">
        <h1 class="">Permis accéléré</h1>
        <p class="lead">
          Le permis accéléré ou permis intensif ! Oui pour les personnes qui le
          souhaitent c’est possible et donc nous proposons des formules
          accélérées.
        </p>
        <hr class="my-4" />
        <div class="row">
          <div class="d-flex justify-content-around">
            <p>
              Le permis de conduire B est soumis à des délais préfectoraux qui
              rendent impossible les formules accélérées si elles ne sont pas
              prévu à l’avance. Mais ceux ci ont été réduits.
            </p>
          </div>

          <p id="hiden-description" class="d-none">
            En effet il n’y a plus de délai obligatoire entre l’enregistrement
            du dossier en préfecture et le passage de l’examen théorique (code),
            il faut tout de même compter une semaine de traitement du dossier et
            un délai de quelques jours entre le passage du code et la
            présentation à l’épreuve pratique du permis de conduire .
          </p>
          <button id="boutton-description-toggle" class="col-2 code-interest">
            Lire plus
          </button>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card">
          <img
            src="../assets/img/cards/accelere.png"
            alt="icon"
            class="card-img-top"
          />
          <div class="card-body">
            <ul>
              <li>Organisation</li>
              <li>Procédure Courte</li>
              <li>Gain de temp</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Code-->
<div class="container-fluid section-accelere">
  <div class="row">
    <div class="col-12 col-md-6 section-inner-code">
      <h1 class="left">Je passe l'examen</h1>
      <p class="description-code">
        Au niveau des places d’examen, il faut savoir qu’elles sont attribuées
        aux auto-écoles en fonction de la réussite de leurs élèves durant
        l’année précédente. Nos statistiques (présentées dans une rubrique du
        site) montrent que nous avons des résultats probants qui sont pour
        l’élève la garantie d’une bonne formation et donc de grande chances
        d’obtenir son permis du premier coup mais aussi l’assurance en cas
        d’échec d’être représenté à l’examen dans les plus brefs délais. Ces
        résultats nous permettent aussi de proposer les formules accélérées.
      </p>
      <!-- Button trigger modal -->
      <button
        type="button"
        class="btn btn-primary code-interest"
        data-toggle="modal"
        data-target="#exampleModal"
      >
        Lire Plus
      </button>
      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Pour les personnes qui le souhaitent c’est possible et donc nous
                proposons des formules accélérées. Que se soit pour les permis
                moto ou auto il est possible d’organiser un planning permettant
                d’effectuer la formation dans un temps réduit. Pour pallier à la
                contrainte des délais administratifs il suffit de constituer le
                dossier d’inscription à l’avance et donc d’organiser cela à
                l’avance.
              </p>
              <p>
                A ces délais se rajoute le problème de disponibilités des places
                d’examen (qu’il faut prévoir un petit peu à l’avance) que ce
                soit pratique ou théorique. Pédagogiquement nous déconseillons
                la formule accélérée qui est pour l’élève une grosse charge
                d’informations à emmagasiner en peu de temps.
              </p>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Fermer
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<?php include '../includes/footer-page.php'; ?>
