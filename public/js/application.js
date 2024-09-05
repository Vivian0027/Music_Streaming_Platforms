"use strict"

const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const range = $('#myRange')
const progressBar = $('#progressBar')

const inputVolume = $('#inputVolume')
const progressVolume = $('#progressVolume')
const audioStatus = $('#audio-status')


const audioStatusClean = $('#audio-status-clean')
const inputVolumeClean = $('#inputVolume-clean')
const progressVolumeClean = $('#progressVolume-clean')


const musicPlayingInfo = $('#music_playing_info')
const musicPlaying = $('#play-music')
const audio = $('#audio')
const btnPrev = $('.btn-prev')
const btnNext = $('.btn-next')
const btnRepeat = $('.btn-repeat')
const btnRandom = $('.btn-random')
const playlist = $('.playlist')
const recentSongs = $('.recentSongs')
const optionWaiting = $('.option-waiting')
const optionRecent = $('.option-recent')
const rightSideControl = $('.control-right-side')
const rightSideControlClean = $('.control-right-side-clean')
const LOCAL_STORAGE_VARIABLE_NAME = 'Music Streaming Platforms'
const changeTheme = $('.change_theme')
const changeThemeClean = $('.change_theme-clean')

const audioDuration = $('#audio-duration')
const currentTimeAudio = $('#current-time')


const app = {
    currentIndex: 0,
    currentIndexWaiting: 0,
    currentIndexRecent: -1,
    isPlaying: false,
    isRandom: false,
    isRepeat: false,
    isDarkTheme: true,
    inputFlag: false,
    isRecentSong: false,
    playedIndex: [],
    songs: '',
    recentListSongs: '',
    listPlaying: '',
    config: JSON.parse(localStorage.getItem(LOCAL_STORAGE_VARIABLE_NAME)) ?? null,


    setDataSongs: function (data) {
        this.listPlaying = JSON.parse(JSON.stringify(data))
    },

    setDataRecentSongs: function (data) {
        this.recentListSongs = JSON.parse(JSON.stringify(data))
    },

    saveConfig: function () {
        this.config = {
            audioVolume: audio.volume,
            audioProgress: audio.currentTime,
            isRepeat: this.isRepeat,
            isRandom: this.isRandom,
            isRecentSong: this.isRecentSong,
            currentIndexWaiting: (!this.isRecentSong) ? this.currentIndex : -1,
            currentIndexRecent: (this.isRecentSong) ? this.currentIndex : -1
        }
        localStorage.setItem(LOCAL_STORAGE_VARIABLE_NAME, JSON.stringify(this.config))
    },

    loadConfig: function () {
        if(this.config !== null) {
            audio.volume = this.config.audioVolume
            audio.currentTime = this.config.audioProgress
            this.isRepeat = this.config.isRepeat
            this.isRandom = this.config.isRandom
            this.isRecentSong = this.config.isRecentSong
            this.currentIndexRecent = this.config.currentIndexRecent
            this.currentIndexWaiting = this.config.currentIndexWaiting
    
            if(this.isRandom) btnRandom.classList.toggle('audioActive')
            if(this.isRepeat) btnRepeat.classList.toggle('audioActive')
    
            inputVolume.value = audio.volume * 100
            inputVolumeClean.value = audio.volume * 100
    
            this.runAfterInput(progressVolume, inputVolume)
            this.runAfterInput(progressVolumeClean, inputVolumeClean)
    
            if(this.isRecentSong) {
                this.currentIndex = this.currentIndexRecent
                this.songs = this.recentListSongs
            }
            else {
                this.currentIndex = this.currentIndexWaiting
                this.songs = this.listPlaying
            }
            if(this.currentIndex == -1 || this.currentIndex == this.songs.length) this.currentIndex = 0
        }
    },

    defineProperties: function () {
        Object.defineProperty(this, 'currentSongPlayList', {
            get: function () {
                return this.songs[this.currentIndex]
            }
        })
    },

    renderListSong: function () {
        const htmlArrayofPlayList = this.listPlaying.map((song, index) => {
            return `
        <li class="row container-song ${(this.currentIndexWaiting == index) ? 'active' : ''}" data-index="${index}">
            <div class="song col-8">
                <div class="row">
                    <div class="col-3 song-img d-flex align-self-center">
                        <img src="${song.img}" class="rounded-2" alt=""
                            style="width: 45px; height: 45px;">
                    </div>
                    <div class="col-9 song-info pe-0">
                        <h6 class="text-white-primary mt-2">${song.name}</h6>
                        <p class="text-support fw-bolder mb-1" style="font-size: 12px;">${song.singer}</p>
                    </div>
                </div>
            </div>
            <div class="other col-4 d-flex align-self-center">
                <i class="fa-regular fa-heart fs-6 refer btn"></i>
                <i class="fa-solid fa-ellipsis fs-6 refer btn"></i>
            </div>
        </li>
        `
        })

        const htmlArrayofRecent = this.recentListSongs.map((song, index) => {
            return `
        <li class="row container-song ${(this.currentIndexRecent == index) ? 'active' : ''}" data-index="${index}">
            <div class="song col-8">
                <div class="row">
                    <div class="col-3 song-img d-flex align-self-center">
                        <img src="${song.img}" class="rounded-2" alt=""
                            style="width: 45px; height: 45px;">
                    </div>
                    <div class="col-9 song-info pe-0">
                        <h6 class="text-white-primary mt-2">${song.name}</h6>
                        <p class="text-support fw-bolder mb-1" style="font-size: 12px;">${song.singer}</p>
                    </div>
                </div>
            </div>
            <div class="other col-4 d-flex align-self-center">
                <i class="fa-regular fa-heart fs-6 refer btn"></i>
                <i class="fa-solid fa-ellipsis fs-6 refer btn"></i>
            </div>
        </li>
        `
        })

        const htmlofPlayList = htmlArrayofPlayList.join('')
        const htmlofRecent = htmlArrayofRecent.join('')

        playlist.innerHTML = htmlofPlayList
        recentSongs.innerHTML = htmlofRecent
    },

    scrollToActiveSong: function () {
        let list
        (this.isRecentSong) ? list = recentSongs : list = playlist
        const active = list.querySelector('li.active')
        if(active) active.scrollIntoView({ behavior: 'smooth', block: 'start' })
    },

    loadCurrentSongOnAudioControl: function () {
        audio.src = this.currentSongPlayList.path
        const song = this.currentSongPlayList
        musicPlayingInfo.innerHTML = `
            <div class="col-6 col-lg-3">
                <img src="${song.img}" alt="" style="height: 62px; width: 62px;"
                    class="rounded-2">
            </div>
            <div class="col-6 col-lg-9 d-flex">
                <div class="menu-control-song-info">
                    <h6 class="text-white-primary mt-3">${song.name}</h6>
                    <p class="text-support fw-bolder">${song.singer}</p>
                </div>
                <div class="ms-3 mt-4 menu-control-song-info">
                    <i class="fa-regular fa-heart fs-6 refer btn"></i>
                </div>
            </div>
        `;
        if (this.isPlaying) {
            musicPlaying.innerHTML = '<i class="fas fa-pause icon-pause"></i>'
        }
        else {
            musicPlaying.innerHTML = '<i class="fas fa-play icon-play"></i>'
        }
        progressBar.style.width = 0
        range.value = 0
        this.inputFlag = false
        this.scrollToActiveSong()


        setTimeout(() => {
            audioDuration.innerText = this.TimeFormat(Math.floor(audio.duration))
        }, 600)

    },

    runAfterInput: function (marker, target) {
        const value = target.value
        const max = target.max
        const width = (value / max) * 100 + '%'
        marker.style.width = width
    },

    nextSong: function () {
        const oldIndex = this.currentIndex
        this.currentIndex++
        if (this.currentIndex == this.songs.length) this.currentIndex = 0
        this.isPlaying = true
        this.SwapActiveSong(oldIndex, this.currentIndex)
        this.loadCurrentSongOnAudioControl()
        audio.play()
    },

    previousSong: function () {
        const oldIndex = this.currentIndex
        this.currentIndex--
        if (this.currentIndex == -1) this.currentIndex = this.songs.length - 1
        this.isPlaying = true
        this.SwapActiveSong(oldIndex, this.currentIndex)
        this.loadCurrentSongOnAudioControl()
        audio.play()
    },

    playRandomSong: function () {
        let newIndex
        if (this.playedIndex.length === this.songs.length) this.playedIndex.length = 0
        do {
            newIndex = Math.floor(Math.random() * this.songs.length)
        } while (this.playedIndex.includes(newIndex))
        this.SwapActiveSong(this.currentIndex, newIndex)
        this.currentIndex = newIndex

        this.playedIndex.push(newIndex)
        this.isPlaying = true
        this.loadCurrentSongOnAudioControl()
        audio.play()
    },

    playSelectSong: function (newIndex) {
        this.currentIndex = newIndex
        this.isPlaying = true
        this.loadCurrentSongOnAudioControl()
        audio.play()
    },

    SwapActiveSong: function (oldIndex, newIndex) {
        let oldSelectedSong
        let newSelectedSong
        if (this.isRecentSong) {
            oldSelectedSong = recentSongs.querySelector(`[data-index="${oldIndex}"]`)
            newSelectedSong = recentSongs.querySelector(`[data-index="${newIndex}"]`)
        } else {
            oldSelectedSong = playlist.querySelector(`[data-index="${oldIndex}"]`)
            newSelectedSong = playlist.querySelector(`[data-index="${newIndex}"]`)
        }
        oldSelectedSong.classList.remove('active')
        newSelectedSong.classList.add('active')
    },

    ActiveSongBySelect: function (e) {
        if(e.target.closest('.song')) {
        if (this.currentIndex != -1) {
            const oldIndex = this.currentIndex
            const oldSelectedSong = e.currentTarget.querySelector(`[data-index="${oldIndex}"]`)
            oldSelectedSong.classList.remove('active')
        }

        const newIndex = e.target.closest('.container-song').dataset.index
        const newSelectedSong = e.currentTarget.querySelector(`[data-index="${newIndex}"]`)
        newSelectedSong.classList.add('active')

        return newIndex
    } else return null
    },

    IconVolumeStatusControl: function () {
        if (audio.volume == 0) {
            audioStatus.innerHTML = '<i class="fa-solid fa-volume-high refer"></i>'
            audioStatusClean.innerHTML = '<i class="fa-solid fa-volume-high refer"></i>'
            audio.volume = this.dataMusicVolume
        } else {
            audioStatus.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>'
            audioStatusClean.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>'
            this.dataMusicVolume = audio.volume
            audio.volume = 0
        }
        inputVolume.value = audio.volume * 100
        inputVolumeClean.value = audio.volume * 100
        this.runAfterInput(progressVolume, inputVolume)
        this.runAfterInput(progressVolumeClean, inputVolumeClean)
        this.runAfterInput(progressVolume, inputVolume)
        this.runAfterInput(progressVolumeClean, inputVolumeClean)
    },

    ChangeVolumeByUser: function (inputVolume, audioStatus) {
        if (inputVolume.value == 0) {
            audioStatus.innerHTML = '<i class="fa-solid fa-volume-xmark refer"></i>'
        } else {
            audioStatus.innerHTML = '<i class="fa-solid fa-volume-high refer"></i>'
        }

        const audioVolume = inputVolume.value / 100
        audio.volume = audioVolume
    },

    ChangeTheme: function () {
        const darkThemeIcon = $('.fa-moon')
        const lightThemeIcon = $('.fa-sun')
        const logo = $('#logo')

        if (this.isDarkTheme) {
            document.documentElement.style.setProperty('--white-color', '#0a0a0a')
            document.documentElement.style.setProperty('--black-color', '#ffff')
            document.documentElement.style.setProperty('--text_light_theme-color', '#ffff')
            document.documentElement.style.setProperty('--text_dark_theme-color', '#55555')
            document.documentElement.style.setProperty('--dark_grey-color', '#d9dce1')
            document.documentElement.style.setProperty('--light_grey-color', '#1e1e1e')

            darkThemeIcon.classList.add('d-none')
            lightThemeIcon.classList.remove('d-none')
            logo.src = '../../public/images/other/symphony-lighttheme-icon.png'

        } else {
            document.documentElement.style.setProperty('--black-color', '#0a0a0a')
            document.documentElement.style.setProperty('--white-color', '#ffff')
            document.documentElement.style.setProperty('--text_light_theme-color', '#5555')
            document.documentElement.style.setProperty('--text_dark_theme-color', '#ffff')
            document.documentElement.style.setProperty('--dark_grey-color', '#1e1e1e')
            document.documentElement.style.setProperty('--light_grey-color', '#d9dce1')

            lightThemeIcon.classList.add('d-none')
            darkThemeIcon.classList.remove('d-none')
            logo.src = '../../public/images/other/symphony-darktheme-icon.png'
        }
        this.isDarkTheme = !this.isDarkTheme
    },

    TimeFormat: function (seconds) {
        let minutes = 0
        let strSeconds = '00'
        let result = ''


        while (seconds >= 60) {
            seconds = seconds - 60
            minutes++
        }

        if (seconds > 9) {
            strSeconds = seconds + ''
        } else {
            strSeconds = `0${seconds}`
        }


        if (minutes > 9) {
            result = `${minutes}:${strSeconds}`
        } else {
            result = `0${minutes}:${strSeconds}`
        }

        return result
    },

    handleEvent: function () {
        audio.ontimeupdate = () => {

            if (audio.duration && !this.inputFlag) {
                const seekTime = audio.currentTime / audio.duration * 100
                range.value = seekTime
                currentTimeAudio.innerText = this.TimeFormat(Math.floor(audio.currentTime))
                this.runAfterInput(progressBar, range)
            }
        }

        audio.onended = () => {
            if (this.isRandom) {
                this.playRandomSong()
            }
            else if (this.isRepeat) {
                audio.play()
            } else {
                this.nextSong()
            }
        }

        audioStatus.onclick = () => this.IconVolumeStatusControl()
        audioStatusClean.onclick = () => this.IconVolumeStatusControl()

        musicPlaying.onclick = () => {

            if (this.isPlaying) {
                audio.pause()
                this.isPlaying = false
                musicPlaying.innerHTML = '<i class="fas fa-play icon-play"></i>'

            } else {
                audio.play()
                this.isPlaying = true
                musicPlaying.innerHTML = '<i class="fas fa-pause icon-pause"></i>'
            }

        }

        inputVolume.onchange = () => {
            this.ChangeVolumeByUser(inputVolume, audioStatus)
            this.ChangeVolumeByUser(inputVolume, audioStatusClean)
        }

        inputVolumeClean.onchange = () => {
            this.ChangeVolumeByUser(inputVolumeClean, audioStatus)
            this.ChangeVolumeByUser(inputVolumeClean, audioStatusClean)
        }

        inputVolume.oninput = () => {
            this.runAfterInput(progressVolume, inputVolume)
            this.runAfterInput(progressVolumeClean, inputVolume)
            inputVolumeClean.value = inputVolume.value
        }
        inputVolumeClean.oninput = () => {
            this.runAfterInput(progressVolumeClean, inputVolumeClean)
            this.runAfterInput(progressVolume, inputVolumeClean)
            inputVolume.value = inputVolumeClean.value
        }

        btnNext.onclick = () => {
            if (this.isRandom) this.playRandomSong()
            else if (this.isRepeat) audio.currentTime = 0
            else this.nextSong()
        }
        btnPrev.onclick = () => {
            if (this.isRandom) this.playRandomSong()
            else if (this.isRepeat) audio.currentTime = 0
            else this.previousSong()
        }
        btnRepeat.onclick = () => {
            this.isRepeat = !this.isRepeat
            btnRepeat.classList.toggle('audioActive')
        }
        btnRandom.onclick = () => {
            this.isRandom = !this.isRandom
            btnRandom.classList.toggle('audioActive')
        }

        range.onchange = (e) => {
            audio.currentTime = e.target.value / 100 * audio.duration
            this.inputFlag = false
        }

        range.oninput = () => {
            this.runAfterInput(progressBar, range)
            this.inputFlag = true
        }

        optionRecent.onclick = () => {
            optionRecent.classList.add('active')
            recentSongs.classList.remove('d-none')
            optionWaiting.classList.remove('active')
            playlist.classList.add('d-none')
            this.isRecentSong = true
            this.currentIndexWaiting = this.currentIndex
            this.currentIndex = this.currentIndexRecent
            this.songs = this.recentListSongs
        }

        optionWaiting.onclick = () => {
            optionWaiting.classList.add('active')
            optionRecent.classList.remove('active')
            playlist.classList.remove('d-none')
            recentSongs.classList.add('d-none')
            this.isRecentSong = false
            this.currentIndexRecent = this.currentIndex
            this.currentIndex = this.currentIndexWaiting
            this.songs = this.listPlaying
        }

        range.oninput()
        inputVolume.oninput()
        inputVolume.onchange()

        inputVolumeClean.oninput()
        inputVolumeClean.onchange()
        this.inputFlag = false

        playlist.onclick = (e) => {
            const newIndex = this.ActiveSongBySelect(e)

            if(newIndex !== null) this.playSelectSong(newIndex)
        }
        recentSongs.onclick = (e) => {
            const newIndex = this.ActiveSongBySelect(e)
            if(newIndex !== null) this.playSelectSong(newIndex)
        }

        rightSideControl.onclick = () => {
            $('.right-side').classList.toggle('right-side-appear')
        }
        rightSideControlClean.onclick = () => {
            $('.right-side').classList.toggle('right-side-appear')
        }

        // XỬ LÝ THEME

        changeTheme.onclick = () => this.ChangeTheme()
        changeThemeClean.onclick = () => this.ChangeTheme()

        // ĐỒNG BỘ HAI THANH ÂM LƯỢNG

        window.onbeforeunload = () => {
            this.saveConfig()
        }

        if(this.isRecentSong) optionRecent.click()

    },

    init: function () {
        this.loadConfig()
        this.defineProperties()
        this.renderListSong()
        this.loadCurrentSongOnAudioControl()
        this.handleEvent()
    }
}

