<style>
    .wrapper {
        display: flex;
        align-items: center;
        width: 100%;
        height: 48px;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        background-color: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(20px);
        border-radius: 12px;
        margin-left: 30px;


    }

    .search-input {
        padding: 8px;
        width: 100%;
        height: 100%;
        border: 1px solid transparent;
        color: rgb(255, 255, 255);
        background-color: transparent;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        font-size: 16px;
        outline: none;
    }

    .icon {
        display: flex;
        padding: 0 6px 0 12px;
        height: 100%;
        align-items: center;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
    }

    .icon-right {
        display: flex;
        padding-right: 8px;
        height: 100%;
        align-items: center;
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
    }

    .background {
        width: 26px;
        height: 26px;
        min-width: 26px;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 400;
        background-color: rgba(255, 255, 255, 0.16);
    }

    .icon-move {
        font-size: 18px;
        color: rgba(230, 227, 227, 0.73);
        transition: background-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s, border-color 0.2s cubic-bezier(0.05, 0, 0.2, 1) 0s;
    }

    /* Add scroll */
    .wrapper.border {
        border: 1px solid rgba(18, 18, 18, 0.12);
    }
</style>

<div class="wrapper">
    <div class="icon">
        <i class="fa-solid fa-magnifying-glass icon-move"></i>
    </div>
    <input class="search-input" placeholder="Tìm kiếm bộ sưu tập của bạn" />
    <div class="icon-right">
        <div class="background">/</div>
    </div>
</div>