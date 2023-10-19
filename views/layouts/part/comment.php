<!-- COMMENT RENDER -->
<?php
$avatar = '';
if (isset($_SESSION['unique_id'])) {
    $id_user = $_SESSION['unique_id'] ?? null;
    $fetchApi = "SELECT * FROM tai_khoan WHERE id = :id_user";
    $data = [
        ':id_user' => $id_user,
    ];

    $result = pdo_query_one($fetchApi, $data);
    $avatar = '../'.$result['img'];
} 
?>
<h1 class="mt-4">Comment</h1>

<div class="container py-5 ">
    <div class="row d-flex justify-content-center chat-box border rounded" style="overflow-y: scroll; height:200px; align-content: flex-start;">

    </div>
    <div class="d-flex flex-start w-100 mt-4">
        
        <img class="rounded-circle shadow-1-strong me-3" style="width: 40px; height: 40px;" src="<?= $avatar === '' ? 'https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1697087993~exp=1697088593~hmac=2fea8f0f3e1a74bbe86e9bff01aa81f11be80c85ca96617453b2012e6ebc7d9a' : $avatar ?>" alt="avatar" width="40" height="40" />
        <form action="" class="form_comment w-100" id="form_comment">
            <div class=" d-flex">
                <input type="text" class="incoming_id" name="product_id" value="<?php echo $_GET['id'] ?? null; ?>" hidden>
                <input type="text" class="input-field border w-100 px-2" style="border-radius: 12px; height: 50px;" name="message" placeholder="Type a message here..." autocomplete="off">
                <button class="px-4 btn btn-primary" name="submit_comment"><i class="fab fa-telegram-plane"></i></button>
            </div>
            <label class="form-label" for="textAreaExample">Message</label>
        </form>
    </div>
</div>