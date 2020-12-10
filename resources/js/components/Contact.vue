<template>
    <div>
        <div class="card my-4">
            <h2 class="text-center card-header" style="padding:10px 0;">
            Contact Me
            </h2>
            <div class="card-body">
                <div class="row justify-content-center">

                        <div class="col-md-8">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name"><strong>Name</strong></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="messages"><strong>Messages</strong></label>
                                    <textarea class="form-control" name="messages" id="messages" rows="3" placeholder="Input your message here." style="height:150px" required></textarea>
                                </div>
                                <button type="submit" name="submit" id="submit" class="btn btn-dark"><strong>Send Email</strong></button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
     props: ['csrf', 'oldName']
}
</script>