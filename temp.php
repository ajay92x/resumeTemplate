<form>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="titleText" maxlength="100" placeholder="Title (max. 100 characters)" />
                        </div>

                        <div class="form-group d-flex">
                            <div class="d-flex">
                                <div>
                                    <input type="radio" name="optionType" style="margin:10px 15px 10px 0px;">
                                </div>
                                <div>
                                    <select name="countText" onchange="onCountChange(this)"></select>
                                </div>
                                <div class="d-flex">
                                    <span style="padding: 15px 5px 0;" id="dynamicText">in a row</span>
                                </div>
                                <div>
                                    <select name="typeText">
                                        <option value="correct">correct</option>
                                        <option value="wrong">wrong</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex m-auto">
                                <div>
                                    <input type="radio" name="optionType" style="margin:10px 15px 10px 0px;">
                                </div>
                                <div>
                                    <select name="typeText">
                                        <option value="correct">correct</option>
                                        <option value="wrong">wrong</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group d-flex" id="puzzleListContainer">
                            <select id="multiselect" multiple="multiple" name="puzzleText"></select>
                        </div>

                        <div class="form-group d-flex">
                            <select name="displayText" onchange="onDisplayChage(this)">
                                <option value="">Select comment type</option>
                                <option value="audio">Audio</option>
                                <option value="graphic">Graphic</option>
                                <option value="text">Text</option>
                                <option value="video">Video</option>
                            </select>
                        </div>

                        <div class="form-group commentaryType msgType">
                            <label for="message-text" class="col-form-label">Text:</label>
                            <input type="text" class="form-control" name="messageText" maxlength="50" placeholder="Type your message here (max. 50 characters)" />
                        </div>

                        <div class="d-grid commentaryType graphicType">
                            <div id="graphic" class="form-group">
                                <!-- <label for="message-text" class="col-form-label">Graphic:</label> -->
                                <div class="upload-btn-wrapperX">
                                    <label for="message-text" class="col-form-label">Upload graphic:</label>
                                    <input type="file" name="graphic" accept="image/*" />
                                </div>
                                <img style="margin-top: 15px;" src="" class="img-thumbnail" onerror="this.onerror=null;this.style.display='none'" alt="">
                            </div>
                        </div>
                        <div class="d-grid commentaryType audioType">
                            <div id="audioContainer" class="form-group">
                                <!-- <label for="message-text" class="col-form-label">Audio:</label> -->
                                <div class="upload-btn-wrapperX">
                                    <label for="message-text" class="col-form-label">Upload audio:</label>
                                    <input type="file" name="audio" accept="audio/*" />
                                </div>
                                <div id="audio" style="margin-top: 15px;"></div>
                            </div>
                        </div>
                        <div class="d-grid commentaryType videoType">
                            <div id="videoContainer" class="form-group">
                                <!-- <label for="message-text" class="col-form-label">Video:</label> -->
                                <div class="upload-btn-wrapperX">
                                    <label for="message-text" class="col-form-label">Upload video:</label>
                                    <input type="file" name="video" accept="video/*" />
                                </div>
                                <div id="video" style="margin-top: 15px;"></div>
                            </div>
                        </div>
                    </form>
