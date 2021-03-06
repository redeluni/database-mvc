
<main>
  <div class="row mt-5">
    <div class="col-4">
      <div class='profile__img__box text-center'>
        <img class='profile__img' src="<?=$user->img?>" alt="avatar personale">
      </div>
      <div class='profile__buttons mt-5'>
        <a class="btn btn-warning form-btn" href="/update/<?=$user->id?>">&#128472;update</a>
        <a class="btn btn-danger form-btn" href="/delete/<?=$user->id?>">&#128473;delete</a>
      </div>
    </div>
    <div class="col-8">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Proprietà</th>
            <th scope="col">Valore</th>
          </tr>
        </thead>
        <tbody>
      <tr>
        <th scope="row">id</th>
        <td scope="row"><?=$user->id?></td>
      </tr>
      <tr>
        <th scope="row">name</th>
        <td><?=$user->name?></td>
      </tr>
      <tr>
        <th scope="row">gender</th>
        <td><?=$user->gender?></td>
      </tr>
      <tr>
        <th scope="row">birth</th>
        <td><?=$user->birth?></td>
      </tr>
      <tr>
        <th scope="row">fiscalcode</th>
        <td><?=$user->fiscalcode?></td>
      </tr>
      <tr>
        <th scope="row">telephone</th>
        <td><?=$user->tel?></td>
      </tr>
      <tr>
        <th scope="row">email</th>
        <td><?=$user->email?></td>
      </tr>
      <tr>
        <th scope="row">country</th>
        <td><?=$user->country?></td>
      </tr>
      <tr>
        <th scope="row">color 1</th>
        <td>
          <span style="position:relative;top:2px;display:inline-block;width:80px;height:15px;background-color:<?=$user->color1?>;text-align:center;"></span>
          <?=$user->color1?>
        </td>
      </tr>
      <tr>
        <th scope="row">color 2</th>
        <td>
          <span style="position:relative;top:2px;display:inline-block;width:80px;height:15px;background-color:<?=$user->color2?>;text-align:center;"></span>
          <?=$user->color2?>
        </td>
      </tr>
      <tr>
        <th scope="row">level</th>
        <td><?=$user->level?></td>
      </tr>
      <tr>
        <th scope="row">look</th>
        <td><?=$user->look?></td>
      </tr>
      <tr>
        <th scope="row">set_date</th>
        <td><?=$user->set_date?></td>
      </tr>
      <tr>
        <th scope="row">upd_date</th>
        <td><?=$user->upd_date?></td>
      </tr>
      <tr>
        <th scope="row">reg_date</th>
        <td><?=$user->reg_date?></td>
      </tr>
      <tr>
        <th scope="row">info</th>
        <td><?=$user->info?></td>
      </tr>
      <tr>
        <th scope="row">cookie</th>
   
        <td><?= empty( $user->cookie )? 'NO' : $user->cookie?></td>
      </tr>
      </tbody>
      </table>
    </div>
  </div>
</main>

