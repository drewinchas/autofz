ARG PREFIX
FROM $PREFIX/afl

WORKDIR /fuzzer

ENV AFL_NO_X86=1 \
    CC=afl-clang-fast \
    CXX=afl-clang-fast++

RUN git clone https://github.com/mboehme/aflfast && \
    cd aflfast && \
    make && make install

ENV CC=afl-clang-fast \
    CXX=afl-clang-fast++
