import java.util.List;

public interface IDataIO {
    List<Player> read(String input);
    void write(List<Player> players);
}
